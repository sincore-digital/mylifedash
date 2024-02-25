<?php

namespace Widgets\CustomAPI;

class Bootstrap extends \Application\Widget
{

	/**
	 * configure
	 */
	public function configure()
	{
		// // add javascripts
		// $this->addJs("js/widget.js");

		// // add css
		// $this->addCss("css/widget.css");

		// // add tpl file to render
		$this->setTemplate("templates/widget.tpl");
	}

	/**
	 * on install
	 */
	public function onInstall()
	{
	}

	/**
	 * on uninstall
	 */
	public function onUninstall()
	{
	}
}