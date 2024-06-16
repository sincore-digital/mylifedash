<?php

namespace Application\Mvc;

class Bootstrap
{
	private $container;
	private $request;
	private $response;
	private $args;
	private $view;
	private $controller;


	/**
	 * 
	 */
	public function __construct(\DI\Container $container, \Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $args, $config=[])
	{
		// save instances
		\Slim\Mvc\Factory::set("config", $config);

		// Look if location are set
		if(!isset($config['application']['name'])) {
			if(!isset($config['application']['location'])) {
				$config['application']['location'] = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . "/../app";
			}

			$applicationLocation = realpath($config['application']['location']);
			$config['application']['name'] = ucfirst($config['application']['name']);

			$applicationName = ucfirst(basename($applicationLocation));
		}
		else {
			$applicationName = $config['application']['name'];
		}

		// Store application parameters
		$this->container = $container;
		$this->request = $request;
		$this->response = $response;
		$this->args = $args;

		// Retrieve routes
		$routes = $container->get("routes");

		// Retrieve route name
		$routeContext = \Slim\Routing\RouteContext::fromRequest($request);
		$route = $routeContext->getRoute();
		$name = $route->getName();

		// Retrieve the route infos
		if(!isset($routes[$name])) {
			throw new \Slim\Exception\HttpNotFoundException($request, "Rota não encontrada");
		}
		$route = $routes[$name];

		// Verifica if there is a variable on URI or we need to add the default value
		foreach($route['defaults'] as $arg_name => $arg_default) {
			if(!isset($this->args[$arg_name])) {
				$this->args[$arg_name] = $arg_default;
			}
		}

		// Start the view and save instance
		$this->view = new \Slim\Mvc\View();
		\Slim\Mvc\Factory::set("view", $this->view);
	

		// Set custom config for view
		$this->view->__basePath = $config['application']['basepath'];
		$this->view->__helpers = new \Slim\Mvc\ViewHelpers($request);

		// Verify if there is a module variable
		$module = "";
		$bootstrapMethods = [];
		if(isset($this->args['module'])) {
			$module =  ucfirst($this->args['module']) . "\\";

			// verify if has bootstrap per module
			$bootstrapName = "\\" . $applicationName . "\\" . $module . "Bootstrap";
			if(class_exists($bootstrapName)) {
				$bootstrap = new $bootstrapName;

				// execute init methods of bootstrap
				$bootstrapMethods = get_class_methods($bootstrap);
				foreach($bootstrapMethods as $method) {
					if(substr($method, 0, 4) == "init") {
						$bootstrap->$method();
					}
				}
			}
		}

		// Verify if controller exists with and without module (because the module can be passed as simple arg, and not as module)
		$controllerName = "\\" . $applicationName . "\\" . $module . "controllers\\" . strtolower($this->args['controller']) . "Controller";
		if(!class_exists($controllerName)) {
			throw new \Exception("Controlador \"" . $controllerName . "\" não encontrado", 404);
		}

		$this->controller = new $controllerName($this->view, $this->container, $this->request, $this->response, $this->args);

		// Create and call action
		$action = $this->args['action'] . "Action";
		if(!is_callable([$this->controller, $action])) {
			throw new \Exception("Action não encontrada", 404);
		}
		$ret = $this->controller->$action();

		// execute halt methods of bootstrap if exists
		foreach($bootstrapMethods as $method) {
			if(substr($method, 0, 4) == "halt") {
				$bootstrap->$method();
			}
		}
	}

	/**
	 * 
	 */
	public function getResponse() : \Psr\Http\Message\ResponseInterface
	{
		// Parse all the view
		return $this->controller->run();
	}
}
