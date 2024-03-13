<?php

namespace Application;

/**
 * run application logic
 */
class Bootstrap
{
	// 
	protected $app;

	//
	protected $request;

	//
	protected $response;
	

	/**
	 * constructor
	 */
	public function __construct($app, \Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response)
	{
		\Application\Factory::set("app", $app);
		\Application\Factory::set("request", $request);
		\Application\Factory::set("response", $response);

		$this->app = $app;
		$this->request = $request;
		$this->response = $response;
	}

	/**
	 * run the process
	 */
	public function process()
	{
		$config = \Application\Factory::get("config");
		$widgets = $config['widgets'];

		// loop widgets
		$oWidgets = [];
		foreach($widgets as $widget) {

			$oWidget = new ("\\Widgets\\" . $widget['provider'] . "\\Bootstrap")($widget);
			$oWidget->process();
			
			$oWidgets[] = $oWidget;

		}

		// compile the template
		return $this->app->get('view')->render($this->response, __DIR__ . "/../src/templates/index.tpl", [
			'oWidgets' => $oWidgets
		]);
	}
}