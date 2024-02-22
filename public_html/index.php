<?php

require __DIR__ . "/../vendor/autoload.php";

// create container
$container = new \DI\Container();
\Slim\Factory\AppFactory::setContainer($container);

// app
$app = \Slim\Factory\AppFactory::create();

// set view container
$container->set("view", function($container) {

	// Create smarty view
	$view = new \Slim\Views\Smarty([
		'template_dir' => [__DIR__ . "/../src/templates"],
		'compile_dir' =>  __DIR__ . "/../tmp/templates_c",
		'caching' => FALSE,
		'cache_lifetime' => 4600,
		'force_compile' => TRUE,  // false on production
		'compile_check' => TRUE,  // false on production
		'debugging' => FALSE,
	]);

	return $view;
});

// add error middleware
$app->addErrorMiddleware(true, true, true);

// add routes
$app->get('/', function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response) {
	
	$bootstrap = new \Application\Bootstrap($this, $request, $response);

	return $bootstrap->process();

	

});

// run app
$app->run();