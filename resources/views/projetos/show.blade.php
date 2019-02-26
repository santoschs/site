<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Carlos Santos</title>
	@include('metainformation')
</head>
<body class="projeto">
	<header>
		@include('layout.navbar')
		<div class="img_background_project">
			<img src="{{URL::to('/')}}/img/projetos/{{$content_all['projeto']['img']}}">
		</div>
		<div class="container">
			<h1>{{$content_all['projeto']['nome']}}</h1>
			<div class="col-md-10 m-auto text-center">
				<h2>{{$content_all['projeto']['descricao_curta']}}</h2>
			</div>
		</div>
	</header>
	<main id="projeto_white">
		@if (!empty($content_all['projeto']['resumo']))
		<section class="resumo">
			<div class="container">
				<div class='row'>
					<div class="col-md-8 m-auto">
						<h1 class="mt-5 text-center"><i class="fas fa-signature"></i></h1>
						<h1 class="text-center mb-3">Resumo</h1>
						<p class="mt-1">
							@php
							echo $content_all['projeto']['resumo'];
							@endphp
						</p>	
					</div>
				</div>

			</div>	
		</section>
		@endif
		@if (!empty($content_all['projeto']['url']))
		<section class="mb-5 conheca">
			<div class="container">
				<div class='row text-center'>
					<div class="col-md-10 m-auto content_main text-center">
						<h1><i class="fas fa-door-open"></i></h1>
						<h1>Conheça mais</h1>
						<p class="text-center">Este projeto está disponível online, acesse e saiba mais sobre ele.</p>
						<a class="mt-2 btn col-md-6 m-auto" href="{{$content_all['projeto']['url']}}" target="_blank">Ver online</a>
					</div>

				</div>	
			</section>
			@endif
			@if (!empty($content_all['projeto']['colaboradores']))
			<section class="alunos">
				<div class="container">
					<div class="row">
						<div class="col-md-10 m-auto">
							<h1 class="mt-5 text-center"><i class="far fa-handshake"></i></h1>
							<h1 class="text-center"> Parcerias</h1>
							<p class="text-center">Estes são parceiros e colaboradores que contribuíram para este projeto</p>
							<div class="row mt-3 justify-content-center">
								@foreach ($content_all['projeto']['colaboradores'] as $key => $content)
								@foreach ($content_all['colaboradores'] as $aluno)
								@if ($content == $aluno['id'])
								<div class="aluno col-4 col-md-2 text-center">
									<a href="{{ route('aluno', ['id' => $aluno['id']]) }}">
										<div class="img-aluno">
											<img src="{{URL::to('/')}}/img/alunos/{{$aluno['img']}}" class="img-fluid">
										</div>
										<p class="nome text-center mt-1">{{explode(' ', $aluno['nome'])[0] .' '. explode(' ', $aluno['nome'])[1]}}</p>
									</a>
								</div>

								@endif
								@endforeach
								@endforeach
							</div>
							<p class="mt-2 text-center small">Conheça mais parceiros na página de <a href="{{route('colaboradores')}}">Colaboradores</a></p>
						</div>
					</div>
				</div>	
			</section>
			@endif
			@if (!empty($content_all['projeto']['more']))
			<section class="mais my-10">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							@php
							echo $content_all['projeto']['more'];
							@endphp
						</div>
					</div>
				</div>	
			</section>
			@endif
			<section class="text-center py-5 explore container-fluid">
				<div class="row">
					<div class="col-md-10 m-auto text-white">
						<h1 class="text-white"><i class="fas fa-hiking"></i></h1>
						<h1 class="text-white">Explore o site</h1>
						<p class="text-center mt-1">Se interessou? Há mais projetos disponíveis para conhecer!</p>
						<a class="btn mt-1 col-md-6" href="{{route('projetos')}}">Ver mais projetos</a>
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