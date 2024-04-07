<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{$oConfig['themes']['title']}</title>

		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

		<!-- Google Fonts -->
		{* <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> *}

		<!-- MDB -->
		{* <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" /> *}

		
		<link href="/themes/{$oConfig['themes']['name']}/bootstrap.min.css" rel="stylesheet" />
		<link href="/themes/{$oConfig['themes']['name']}/global.css" rel="stylesheet" />

		{* {foreach from=$files['css'] item=css}
			<link href="{$css}" rel="stylesheet">
		{/foreach} *}
	</head>
	<body data-bs-theme="dark">
		
		<div class="container">

			<div class="row">
				{foreach from=$oWidgets item=widget}
					<div class="col-{$widget->getColumns()} mt-3">
						{$widget->getHtml()}
					</div>
				{/foreach}
			</div>

		</div>

		<script src="/themes/{$oConfig['themes']['name']}/bootstrap.bundle.min.js"></script>
		
		<!-- MDB -->
		{* <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> *}
		{* <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script> *}
		

		{* {foreach from=$files['js'] item=js}
			<script src="{$js}"></script>
		{/foreach} *}
	</body>
</html>
	