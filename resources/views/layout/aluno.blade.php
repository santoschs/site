
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Carlos Santos</title>
	@include('metainformation')
</head>
<body class="projeto projeto_all">
	@include('layout.navbar')
	<main id="projetos_all">
		<div class="container pb-8">
			<section class="alunos">
				<div class="container">
					<div class="row">
						<div class="col-md-10 m-auto">
							<div class="row mt-3 justify-content-center">
								<div class="aluno col-md-3 m-auto text-center">
									<div class="img-aluno">
										<img src="{{URL::to('/')}}/img/alunos/{{$content_all['colaborador']['img']}}" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="text-center">
									<h1 class="mt-3 title">{{$content_all['colaborador']['nome']}}</h1>
									<p class="text-center bold my-3">{{$content_all['colaborador']['class']}}</p>
								</div>
							</div>
							<div class="row">
								<p>
									{{$content_all['colaborador']['resumo']}}	
								</p>
							</div>
							@if (!empty($content_all['colaborador']['redes-sociais']))
								<div class="row text-center justify-content-center mt-5">
								<h1 class="text-center">Social</h1>
							</div>
							<div class="row justify-content-center text-center mt-2">
								@foreach ($content_all['colaborador']['redes-sociais'] as $key => $content)
								@if ($key == '' || $key == 'homepage' )
								@php($key = "globe")
								@endif
								<h1 data-toggle="tooltip" data-placement="bottom" title="{{ ($key == "globe")? "Página pessoal" : ucfirst($key) }}"><a href="{{$content}}" target="_blank" class="link" ><i class="{{($key == "globe")? 'fas' : 'fab' }} fa-{{$key}}"></i></a></h1>
								@endforeach
							</div>
							@endif
						</div>
					</div>
				</div>	
				<h1 class="text-center mt-8 ">Projetos que fez parte</h1>
				<div class="row justify-content-center">
					@foreach ($content_all['projetos'] as $content)
					@foreach ($content['colaboradores'] as $colaborador)
					@if ($colaborador == $content_all['colaborador']['id'])
						<div class="col-md-4 mt-5" data-aos="fade-up" data-aos-duration="2000">
						<a href="{{route('projeto', ['id' => $content["id"]])}}">
							<div class="project">
								<div class="project-figure">
									<img src="{{URL::to('/')}}/img/projetos/{{ $content["img"] }}">
								</div>
								<h1>{{ $content["nome"] }}</h1>
								<p>{{ $content['descricao_curta'] }}</p>
							</div>
						</a>
					</div>
					@endif
					@endforeach
				@endforeach
			</div>
		</section>
		<div class="col-md-8 m-auto pt-2">
			<div class="text-center mt-5">
				<h1>Entre em contato</h1>
				<p class="text-center">Para conhecer mais projetos entre em contato comigo</p>
				<a href="{{route('contato')}}" class="btn mt-1" >Entrar em contato</a>
			</div>
		</div>
	</div>
</main>	
<footer class="colaborador">
	@include('layout.footer')
</footer>
@include('scripts')
<script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
</body>
</html>