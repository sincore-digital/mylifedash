<?php

namespace Widgets\Passwords;

class Bootstrap extends \Application\Widget
{

	/**
	 * configure
	 */
	public function configure()
	{
		// add tpl file to render
		$this->setTemplate($this->getPath() . "/templates/widget.tpl");
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