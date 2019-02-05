<div class="container">
	<div class="losangle"></div>
	<div class="losangle"></div>
	<div class="row text-center">
		<div class="col-md-12">
			<img src="{{URL::to('/')}}/img/idea.svg" width="150" class="mt-3" data-aos="fade-up" data-aos-duration="2000">
			<p class="indicator text-uppercase mb-3" data-aos="fade-up" data-aos-duration="2000">projetos</p>
			{{-- <p class="indicator text-uppercase f_200 my-3">Projetos</p> --}}
			<p class="lead" data-aos="fade-up" data-aos-duration="2000">
				@php 
				echo( $content_all["institucional"]["projects"]);
				@endphp
			</p>
		</div>
	</div>
	<div class="row">
		@php ($contador = 0)
		@foreach ($content_all['projetos'] as $content)
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
		@if ($contador < 2)
		@php($contador++)
		@else
		@break
		@endif
		@endforeach
	</div>
	<div class="text-center mt-5">
		<p class="lead" data-aos="fade-left" data-aos-duration="2000">Conheça mais projetos</p>
		<a class="btn mt-1" href="{{URL::to('/projetos')}}" data-aos="fade-right" data-aos-duration="2000">Ver mais</a>
	</div>
</div>