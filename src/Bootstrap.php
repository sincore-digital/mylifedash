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
		$this->app = $app;
		$this->request = $request;
		$this->response = $response;
	}

	/**
	 * run the process
	 */
	public function process()
	{
		return $this->app->get('view')->render($this->response, __DIR__ . "/../src/templates/index.tpl", [
			'variable' => "Hello!",
		]);

	}
}