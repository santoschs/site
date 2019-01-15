<div class="container">
	<div class="row">
		<div class="col-md-10">
			<p class="lead">
				@php
				echo $content_all["institucional"]["projects"]
				@endphp
			</p>
		</div>
	</div>
	<div class="row mt-5">
		@foreach ($content_all['projetos'] as $content)
		{{-- {{var_dump($content)}} --}}
		<div class="col-md-4">
			<div class="project">
				<div class="project-figure">
					<img src="{{URL::to('/')}}/img/{{ $content["img"] }}">
				</div>
				<h1>{{ $content["nome"] }}</h1>
				<p>{{ $content['descricao_curta'] }}</p>
			</div>
		</div>
		@endforeach
	</div>
	<div class="text-center mt-5">
		{{-- <p class="lead">Conheça mais projetos</p> --}}
		<a class="btn" href="{{URL::to('/projetos')}}">Ver todos os projetos</a>
	</div>
</div>