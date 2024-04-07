<?php

namespace Application;

class Widget 
{
	protected $template;
	
	protected $pluginName = "";

	protected $config;

	protected $vars = [];

	protected $html = "";

	protected $javascripts = [];
	protected $stylesheets = [];

	private $app;
	private $request;
	private $response;

	/**
	 * construct
	 */
	public function __construct($config)
	{
		$this->config = $config;

		$parts = explode("\\", get_class($this));
		$this->pluginName = $parts[1];

		$this->app = \Application\Factory::get("app");
		$this->request = \Application\Factory::get("request");
		$this->response = \Application\Factory::get("response");


		$this->configure();
	}

	public function configure() {}

	/**
	 * get config
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * add stylesheets to dashboard
	 */
	public function addStylesheets($file)
	{
		$this->stylesheets[] = "widgets/" . $this->pluginName . $file;
	}

	public function getStylesheets()
	{
		return $this->stylesheets;
	}

	/**
	 * add javascript to dashboard
	 */
	public function addJavascript($file)
	{
		$this->javascripts[] = "widgets/" . $this->pluginName . $file;
	}

	public function getJavascripts()
	{
		return $this->javascripts;
	}

	/**
	 * get columns of widget on template
	 */
	public function getColumns()
	{
		return $this->config['cols'];
	}

	/**
	 * get absolute path to the widget
	 */
	public function getPath()
	{
		return WIDGETS_PATH . "/" . $this->pluginName;
	}

	/**
	 * get template file
	 */
	public function getTemplate()
	{
		return $this->template;
	}

	/**
	 * register the widget template
	 */
	protected function setTemplate($filepath)
	{
		$this->template = $filepath;
	}

	/**
	 * assign vars to template
	 */
	public function assign($name, $value)
	{
		$this->vars[$name] = $value;
	}

	/**
	 * get vars
	 */
	public function getVars()
	{
		return $this->vars;
	}

	/**
	 * process the widget, processing data and parsing template
	 */
	public function process()
	{
		$this->html = $this->app->get("view")->getSmarty()->fetch($this->getTemplate(), $this->getVars());
	}

	/**
	 * get html of widget
	 */
	public function getHtml()
	{
		return $this->html;
	}
}