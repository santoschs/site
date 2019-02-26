<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('metainformation')
	<title>Sobre - Carlos Santos</title>
</head>
<body class="projeto projeto_all">
	<header>
		@include('layout.navbar')
		<div class="img_background_project">
			<img src="{{URL::to('/')}}/img/bg_sobre.jpg">
		</div>
		<div class="container">
			<h1>Sobre mim</h1>
			<div class="col-md-10 m-auto text-center">
				<h2>Uma breve parte de quem sou</h2>
			</div>
		</div>
	</header>
		<main>
			<section id="text_about">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="img_carlos picture rounded-circle mt-5" >
								<img src="{{URL::to('/')}}/img/carlos.jpeg" class="  " width="300">
								<div class="more">
									<div class="links">
										<a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
										<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
										<a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
										<a href="#" target="_blank"><i class="fab fa-github"></i></a>
									</div>
								</div>
							</div>
							<div class="menu_sobre">
								<a href="#first">Minha história</a>
								<a href="#second">Experiência</a>
								<a href="#third">Formação Acadêmica</a>
								<a href="#fourth">Áreas de pesquisa</a>
							</div>
						</div>
						<div class="col-md-8 p-1">
							<div class="row p-1">
								<h2 id="first" class="pt-5">Minha história</h2>
								<span class="divisor black"></span>
								<p>
									@php
									echo $content_all['institucional']['minha_historia'];
									@endphp
								</p>
							</div>
							<div class="row" id="second">
								<h2 class="pt-5">Minha Experiência</h2>
								<span class="divisor black"></span>
								<div class="col-md-12 p-2">
									<div class="experience">
										@foreach ($content_all['institucional']['experiencia'] as $experiencia)
										<div class="experience_item">		
												<h3 class="f_100">{{$experiencia['instituição']}}</h3>
												<p>{{$experiencia['vinculo'] . ' (' . $experiencia['periodo'] . ')'}} </p>
											</div>
											@endforeach
										</div>
									</div>
									<div class="row container" id="third">
										<h2 class="mt-5">Formação Acadêmica</h2>
										<span class="divisor black"></span>
										<div class="pl-2 container">
											@foreach ($content_all['institucional']['formacao'] as $formacao)
											<div class="mt-2">
												<p class=" row font-weight-bold">{{$formacao['periodo']}}</p>
												<p class=" row font-weight-bold">{{$formacao['instituicao']}}</p>
												<p class=" row pl-3">{{$formacao['formacao']}}</p>
												@if (!empty($formacao['titulo']))
												<p class=" row pl-3">{{$formacao['titulo']}}</p>
												@endif		
											</div>
											@endforeach
										</div>
									</div>
									<div class="row pb-5 container" id="fourth">
										<h2 class="pt-5">Linhas de Pesquisa</h2>
										<span class="divisor black"></span>
										<ul class="mt-1">
											@foreach ($content_all['institucional']['linhas_pesquisa'] as $linhas_pesquisa)
											<li><p>{{$linhas_pesquisa}}</p></li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
	<footer>
		@include('layout.footer')
	</footer>
	@include('scripts')
	<script type="text/javascript" src="{{URL::to('/')}}/js/sobre.js"></script>
</body>
</html>
