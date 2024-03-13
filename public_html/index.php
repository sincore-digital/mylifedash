<?php

require __DIR__ . "/../vendor/autoload.php";

defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(__DIR__) . "/..");
defined("WIDGETS_PATH") || define("WIDGETS_PATH", APPLICATION_PATH . "/widgets");

ini_set("display_errors", "on");

// create container
$container = new \DI\Container();
\Slim\Factory\AppFactory::setContainer($container);

// app
$app = \Slim\Factory\AppFactory::create();

// read config
$config = require(__DIR__ . "/../config.php");
\Application\Factory::set("config", $config);

// set view container
$container->set("view", function($container) use ($config) {

	$view = new \Slim\Views\Smarty($config['smarty']);

	\Application\Factory::set("view", $view);

	return $view;
});

// add error middleware
$app->addErrorMiddleware(true, true, true);

// add routes
$app->get("/", function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response) {
	
	$bootstrap = new \Application\Bootstrap($this, $request, $response);

	return $bootstrap->process();

});

// run app
$app->run();