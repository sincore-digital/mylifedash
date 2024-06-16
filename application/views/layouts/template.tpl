<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>

		<title>Hello, world!</title>
	</head>
	<body>

		<div class="page">
			{* <header class="navbar navbar-expand-sm navbar-light d-print-none">
				<div class="container-xl">
					<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
						<a href="#">
						<img src="..." width="110" height="32" alt="Tabler" class="navbar-brand-image" />
						</a>
					</h1>

					<div class="navbar-nav flex-row order-md-last">
						<div class="nav-item">
							<a href="#" class="nav-link d-flex lh-1 text-reset p-0">
								<span class="avatar avatar-sm" style="background-image: url(...)"></span>
								<div class="d-none d-xl-block ps-2">
								<div>Paweł Kuna</div>
								<div class="mt-1 small text-secondary">UI Designer</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</header> *}
			

			{* nav *}
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
										{* <li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
												<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
													<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path><path d="M12 12l8 -4.5"></path><path d="M12 12l0 9"></path><path d="M12 12l-8 -4.5"></path><path d="M16 5.25l-8 4.5"></path></svg>
												</span>
												<span class="nav-link-title">
													Interface
												</span>
											</a>
											<div class="dropdown-menu">
												<div class="dropdown-menu-columns">
													<div class="dropdown-menu-column">
														<a class="dropdown-item" href="./alerts.html">
															Alerts
														</a>
														<a class="dropdown-item" href="./accordion.html">
															Accordion
														</a>
														<div class="dropend">
															<a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
																Authentication
															</a>
															<div class="dropdown-menu">
																<a href="./sign-in.html" class="dropdown-item">
																	Sign in
																</a>
																<a href="./sign-in-link.html" class="dropdown-item">
																	Sign in link
																</a>
															</div>
														</div>
														
													</div>
													<div class="dropdown-menu-column">
														<a class="dropdown-item" href="./lightbox.html">
															Lightbox
															<span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
														</a>
														<a class="dropdown-item" href="./lists.html">
															Lists
														</a>
														<a class="dropdown-item" href="./modals.html">
															Modal
														</a>
													</div>
												</div>
											</div>
										</li> *}
										
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
								{$layout_content}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
	</body>
</html>