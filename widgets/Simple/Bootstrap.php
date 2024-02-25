<?php

namespace Widgets\Simple;

class Bootstrap extends \Application\Widget
{
	/**
	 * configure
	 */
	public function configure()
	{
		// // add tpl file to render
		$this->setTemplate("simple.tpl");

		$this->assign("value", $this->config['value']);
	}
}