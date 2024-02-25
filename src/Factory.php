<?php

namespace Application;

class Factory
{
	static $params;

	static public function set($name, $value)
	{
		if(!self::$params) {
			self::$params = [];
		}

		self::$params[$name] = $value;
	}

	static public function get($name)
	{
		return self::$params[$name];
	}
}