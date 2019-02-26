
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Colaboradores - Carlos Santos</title>
	@include('metainformation')
</head>
<body class="projeto projeto_all">
	<header>
		@include('layout.navbar')
		<div class="img_background_project">
			<img src="{{asset('/img/bg_alunos.jpg')}}">
		</div>
		<div class="container">
			<h1 class="colaborador-title">Colaboradores</h1>
			<div class="col-md-10 m-auto text-center">
				<h2>Conheça pessoas que colaboraram em projetos durante minha carreira</h2>
			</div>
		</div>
	</header>
	<main id="projetos_all">
		<div class="container pb-8">
			<h1 class="mt-5 colaborador"><i class="fas fa-signature"></i> Colaboradores</h1>
			<p class="ml-md-6">Clique na foto para ir à página do colaborador</p>
			@if (!empty($content_all['projeto']['colaboradores']))
			<section class="alunos">
				<div class="container">
					<div class="row">
						<div class="col-10 m-auto">
							<div class="row mt-3 justify-content-center">
								{{-- @foreach ($content_all['colaboradores'] as $key => $content) --}}
								@foreach ($content_all['colaboradores'] as $aluno)
								{{-- @if ($content == $aluno['id']) --}}
								<div class="aluno col-6 col-md-2 text-center">
									<a href="{{ route('aluno', ['id' => $aluno['id']]) }}">
										<div class="img-aluno">
											<img src="{{asset('/img/alunos/'.$aluno['img'])}}" class="img-fluid">
										</div>
										<p class="nome text-center mt-1">{{explode(' ', $aluno['nome'])[0] .' '. explode(' ', $aluno['nome'])[1]}}</p>
									</a>
								</div>
								{{-- @endif --}}
								@endforeach
								{{-- @endforeach --}}
							</div>
						</div>
					</div>
				</div>	
			</section>
			@endif
			<div class="col-md-8 m-auto pt-2">
				<div class="text-center mt-5">
				{{-- <h1><i class="fas fa-mug-hot"></i></h1> --}}
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
</body>
</html>