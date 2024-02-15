
<?php

	defined("WIDGETS_PATH") || define("WIDGETS_PATH", realpath(__DIR__) . "/Widgets");

	// autoload
	spl_autoload_register(function($class_name) {

		//
		$parts = explode("\\", $class_name);

		// widgets
		if($parts[0] == "Widgets") {
			unset($parts[0]);

			$file = WIDGETS_PATH . "/" . $parts[1];

			$file .= "/" . implode("/", $parts) . ".php";
		}

		// include
		if(file_exists($file)) {
		    require_once $file;
		}
		else {
			throw new \Exception("Class " . $class_name . " not found");
		}
	});

	// configs
	$widgets = [
		// widget 1
		[
			'provider' => "Simple",
			'cols' => 6,
		],

		// widget 2
		[
			'provider' => "Simple",
			'cols' => 6,
		],
	];

	$s = new \Widgets\Simple();
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap demo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
	<body>
		
		<div class="container">

			<div class="row">
				<?php
					foreach($widgets as $widget) {
						// instantiate the widget
						$class = new ("\\Widgets\\" . $widget['provider']);

						echo "
							<div class=\"col-" . $widget['cols'] . "\">
						asd
							</div>
						";
					}
				?>
			</div>

		</div>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	</body>
</html>
	