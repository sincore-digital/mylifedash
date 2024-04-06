<?php

namespace Widgets\Simple;

class Bootstrap extends \Application\Widget
{
	/**
	 * configure
	 */
	public function configure()
	{
		// add tpl file to render
		$this->setTemplate($this->getPath() . "/simple.tpl");

		// assign config value
		$this->assign("value", $this->getConfig()['value']);
	}
}