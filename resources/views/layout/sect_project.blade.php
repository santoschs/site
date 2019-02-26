<div class="row justify-content-center">
	<div class="col-md-10 m-auto">
		<div class="container">
			<h1 class="text-right title">Projetos</h1>
			<p class="mt-1 text-justify pr-md-3">
				@php 
				echo( $content_all["institucional"]["projects"]);
				@endphp
			</p>	
			<div class="row">
				@php ($contador = 0)
				@foreach ($content_all['projetos'] as $content)
				<div class="col-md-4 mt-5" data-aos="fade-up" data-aos-duration="2000">
					<a href="{{route('projeto', ['id' => $content["id"]])}}">
						<div class="project">
							<div class="project-figure">
								<img src="{{asset('/img/projetos/'. $content["img"])}}">
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
			<div class="col-md-6 mt-8 m-auto">
				<h2 class="">Conheça</h2>
				<p class="text-right">Há mais projetos disponíveis em <strong>projetos</strong></p>
				<a class="btn mt-1" href="{{URL::to('/projetos')}}" data-aos="fade-right" data-aos-duration="2000">Ver mais</a>
			</div>
		</div>
	</div>
</div>