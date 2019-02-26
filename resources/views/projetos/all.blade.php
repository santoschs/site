
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Projetos - Carlos Santos</title>
	@include('metainformation')
</head>
<body class="projeto projeto_all">
	<header>
		@include('layout.navbar')
		<div class="img_background_project">
			<img src="{{asset('/img/bg_projetos')}}.jpg">
		</div>
		<div class="container">
			<h1>Projetos</h1>
			<div class="col-md-10 m-auto text-center">
				<h2>Conheça projetos que desenvolvi e me envolvi durante minha carreira</h2>
			</div>
		</div>
	</header>
	<main id="projetos_all">
		<div class="container pb-8">
			<h1 class="mt-5"><i class="fas fa-signature"></i> Projetos</h1>
			<p>Clique em <strong>ver mais</strong> para ir à página do projeto</p>
			<div class="row">
				@php ($contador = 0)
				@foreach ($content_all['projetos'] as $content)
				<div class="col-md-4 mt-5" data-aos="fade-up" data-aos-duration="2000">
					<a href="{{route('projeto', ['id' => $content["id"]])}}">
						<div class="project">
							<div class="project-figure">
								<img src="{{asset('/img/projetos/'.$content["img"])}}">
							</div>
							<h1>{{ $content["nome"] }}</h1>
							<p>{{ $content['descricao_curta'] }}</p>
						</div>
					</a>
				</div>
				@endforeach
			</div>
			<div class="col-md-8 m-auto pt-2">
				<div class="text-center mt-5">
				<h1>Entre em contato</h1>
				<p class="text-center">Para conhecer mais projetos entre em contato comigo</p>
				<a href="{{route('contato')}}" class="btn mt-1" >Entrar em contato</a>
			</div>
			</div>
		</div>
	</main>	
	<footer>
		@include('layout.footer')
	</footer>
	@include('scripts')
	<script src="{{ asset('/js/projetos_all.js')}}"></script>
</body>
</html>