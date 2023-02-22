<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>
<body>
	<div class="sidebar-layout sidebar-fixed">
		<aside class="sidebar">
			<div class="sidebar-header">
				<a href="javascript:void(0)" class="sidebar-link">
					<img class="logo-lg" src="https://via.placeholder.com/150x60" alt="Logo Nusantara UI" />
					<img class="logo-sm" src="https://via.placeholder.com/60x60" alt="Logo Nusantara UI" />
				</a>
				<button class="sidebar-button" data-toggle="sidebar">
					<i class="fa-solid fa-bars"></i>
				</button>
			</div>
			<div class="sidebar-widget"></div>
			<div class="sidebar-body">
				<ul class="metismenu" id="sidebar-menu">
					<li class="title">Dashboard</li>
					<li class="mm-active">
						<a class="has-arrow" aria-expanded="true" href="javascript:void(0)">
							<i class="fa-solid fa-tachometer-alt"></i>
							<span>Dashboard</span>
						</a>
						<ul>
							<li><a href="javascript:void(0)">Ecommerce</a></li>
							<li><a href="javascript:void(0)">Company</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow mm-collapsed" href="javascript:void(0)">
							<i class="fa-solid fa-box"></i>
							<span>Dashboard</span>
						</a>
						<ul>
							<li class="mm-active">
								<a class="has-arrow" href="javascript:void(0)">Testing</a>
								<ul>
									<li><a href="javascript:void(0)">Ecommerce</a></li>
									<li><a href="javascript:void(0)">Company</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Testing</a></li>
							<li><a href="javascript:void(0)">Testing</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">Testing</a></li>
				</ul>
			</div>
			<div class="sidebar-widget"></div>
		</aside>

		<div role="main" id="content-wrapper">
            <header class="header-content"></header>
            <main class="main-content"></main>
            <footer class="footer-content"></footer>
        </div>
	</div>
</body>
</html>
