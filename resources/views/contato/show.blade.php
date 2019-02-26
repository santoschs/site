<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Carlos Santos - Contato</title>
	@include('metainformation')
</head>
<body class="projeto">
	<header>
		@include('layout.navbar')
		<div class="img_background_project">
			<img src="{{URL::to('/')}}/img/bg_contato.jpg">
		</div>
		<div class="container">
			<h1>Contato</h1>
		</div>
	</header>
	<main id="projeto_white" class="pb-8">
		<section class="resumo">
			<div class="container">
				<div class='row'>
					<div class="col-md-8 m-auto">
						<h1 class="mt-5 text-center"><i class="fas fa-hands-shake"></i></h1>
						<h1 class="text-center mb-3">Contato</h1>
						<p class="mt-1 text-center">
							@php
							echo $content_all['institucional']['contato'];
							@endphp
						</p>
						<a href="tel:{{$content_all['institucional']['social']['fone']}}"><i class="fas fa-mobile"></i> {{$content_all['institucional']['social']['fone']}}</a>
						<a href="tel:{{$content_all['institucional']['social']['fone']}}"><i class="fas fa-mobile"></i> {{$content_all['institucional']['social']['fone']}}</a>
					</div>
				</div>
			</div>	
		</section>
		</main>	
		<footer>
			@include('layout.footer')
		</footer>

		@include('scripts')
		<script src="{{URL::to('/')}}/js/projetos.js"></script>
	</body>
	</html>