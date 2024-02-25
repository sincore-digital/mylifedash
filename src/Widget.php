<?php

namespace Application;

class Widget 
{
	protected $files = [];
	
	protected $pluginName = "";

	protected $config;

	protected $vars = [];

	/**
	 * construct
	 */
	public function __construct($config)
	{
		$this->config = $config;

		$parts = explode("\\", get_class($this));
		$this->pluginName = $parts[1];

		$this->configure();
	}

	/**
	 * get columns of widget on template
	 */
	public function getColumns()
	{
		return $this->config['cols'];
	}

	/**
	 * get template file
	 */
	public function getTemplate()
	{
		if(isset($this->files['template'])) {
			return WIDGETS_PATH . "/" . $this->pluginName . "/" . $this->files['template'];
		}
		else {
			return "";
		}
	}

	/**
	 * register the widget template
	 */
	protected function setTemplate($filepath)
	{
		$this->files['template'] = $filepath;
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
}