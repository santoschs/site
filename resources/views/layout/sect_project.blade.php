<div class="container">
	<div class="row">
		<div class="col-md-10">
			<p class="lead">
				@php 
					echo( $content_all["institucional"]["projects"]);
				@endphp
			</p>
		</div>
	</div>
	<div class="row">
		@php ($contador = 0)
		@foreach ($content_all['projetos'] as $content)
		<div class="col-md-4 mt-5">
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
		@if ($contador < 2)
			@php($contador++)
		@else
			@break
		@endif
		@endforeach
	</div>
	<div class="text-center mt-5">
		<a class="btn" href="{{URL::to('/projetos')}}">Ver todos os projetos</a>
	</div>
</div>