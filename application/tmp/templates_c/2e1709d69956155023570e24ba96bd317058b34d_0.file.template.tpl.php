<?php
/* Smarty version 4.5.3, created on 2024-06-16 03:32:06
  from '/var/www/html/mylifedash/application/views/layouts/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_666e5cb6db5396_48536649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1709d69956155023570e24ba96bd317058b34d' => 
    array (
      0 => '/var/www/html/mylifedash/application/views/layouts/template.tpl',
      1 => 1718508719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666e5cb6db5396_48536649 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"><?php echo '</script'; ?>
>

		<title>Hello, world!</title>
	</head>
	<body>

		<div class="page">
						

						<header class="navbar-expand-md">
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="navbar">
						<div class="container-xl">
							<div class="row flex-fill align-items-center">
								<div class="col">
									<ul class="navbar-nav">
										<li class="nav-item active">
											<a class="nav-link" href="./">
												<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
													<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l-2 0l9 -9l9 9l-2 0"></path><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
												</span>
												<span class="nav-link-title">
													Home
												</span>
											</a>
										</li>
																				
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="page-wrapper">
				<div class="page-body">
					<div class="container-xl">
						<div class="row">
							<div class="col-12">
								<?php echo $_smarty_tpl->tpl_vars['layout_content']->value;?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
	</body>
</html><?php }
}
