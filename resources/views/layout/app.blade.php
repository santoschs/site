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
		@include('layout.navbar')
		<div class="container">
			<div class="losangle"></div>
			<div class="losangle"></div>
			<div class="">
				<div class="row">
					<img src="{{URL::to('/')}}/img/logo.png" class="logo">	
				</div>
				<div class="row">
					<img src="{{URL::to('/')}}/img/escrito.png" class="escrito">
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
