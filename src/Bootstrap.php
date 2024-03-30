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
		$javascripts = [];
		foreach($widgets as $widget) {

			$oWidget = new ("\\Widgets\\" . $widget['provider'] . "\\Bootstrap")($widget);
			$oWidget->process();
			
			$oWidgets[] = $oWidget;

			$oJavascripts = array_merge($javascripts, $oWidget->getJavascripts());

		}


		// compile all javascripts
		$outJavascript = "";
		foreach($oJavascripts as $javascript) {
			$outJavascript .= "\n;\n" . file_get_contents($javascript);
		}
		file_put_contents(APPLICATION_PATH . "/public_html/assets/compiled.js", $outJavascript);


		// compile the template
		return $this->app->get('view')->render($this->response, __DIR__ . "/../src/templates/index.tpl", [
			'oWidgets' => $oWidgets,
		]);
	}
}