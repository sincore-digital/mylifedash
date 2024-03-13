<?php

return [

	// configurações dos widgets
	'widgets' => [

		// widget 1
		[
			'provider' => "CustomAPI",
			'cols' => 6,
			'config' => [
				'url' => "",
			],
		],

		// widget 2
		[
			'provider' => "Simple",
			'cols' => 4,
			'value' => "BRUNO",
		],

		// widget 3
		[
			'provider' => "Simple",
			'cols' => 2,
			'value' => "QUALQUER",
		],

		// widget 4
		[
			'provider' => "Passwords",
			'cols' => 2,
			'value' => "QUALQUER",
		],

	],

	// smarty
	'smarty' => [
		'template_dir' => [APPLICATION_PATH . "/src/templates"],
		'compile_dir' =>  APPLICATION_PATH . "/tmp/templates_c",
		'cache_dir' =>  APPLICATION_PATH . "/tmp/template_cache",
		'caching' => FALSE,
		'cache_lifetime' => 4600,
		'force_compile' => TRUE,  // false on production
		'compile_check' => TRUE,  // false on production
		'debugging' => FALSE,
	],

];