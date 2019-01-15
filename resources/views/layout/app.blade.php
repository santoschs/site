<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Carlos Santos</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="{{URL::to('/')}}/img/logo.png" width='60'></a>
				<div class="ml-auto">
					<a  id="show_menu_button">
						<img src="{{URL::to('/')}}/img/menu.svg">
					</a>
				</div>
				<div class="show_navbar" id="navbar">
					<ul class="navbar-nav"> 
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/')}}">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/parceiros')}}">Parceiros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/projetos')}}">Projetos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/about')}}">Sobre mim</a>
						</li>	
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/contact')}}">Contato</a>
						</li>	
						<li>
							<p>Carlos H. Silva Santos 
								<br><a href="mailto:santos.chs@gmail.com"><i class="far fa-envelope"></i> santos.chs@gmail.com</a>
								<br><a href="tel:+5515981359639"><i class="fas fa-mobile-alt"></i> +55 15 98135-9639</a>
							</p>
						</li>
					</ul>
					<a id="close_menu">
						<img src="{{URL::to('/')}}/img/cross-symbol.svg">
					</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="losangle"></div>
			<div class="losangle"></div>
			<div class="col">
				<div class="row">
					<img src="{{URL::to('/')}}/img/logo.png" class="logo">	
				</div>
				<div class="row">
					<h1 class="text-center m-auto mt-3">Carlos H. Silva-Santos</h1>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section id="about" class="py-8">
			@include('layout.sect_about')
		</section>
		<section id="projects" class="pt-12">
			@include('layout.sect_project')
		</section>
	</main>
	<footer>
		@include('layout.footer')
	</footer>
	<script type="text/javascript" src="{{URL::to('/')}}/js/app.js"></script>
	<script type="text/javascript" src="{{URL::to('/')}}/js/main.js"></script>
</body>
</html>
