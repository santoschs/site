<div class="container">
	<div class="row">
		<div class="col-md-12 m-auto text-left pt-5">
			<h1 class="title">Bem vindo!</h1>
			<p class="pl-md-4 mt-2" data-aos="fade-left" data-aos-duration="2000">
				@php
				echo $content_all['institucional']['about'];
				@endphp
			</p>
			<div class="text-right  mt-8">
				<div class="row">
				<div class="col-md-6 m-auto">
				<h2>Quer saber mais?</h2>
				<p data-aos="fade-up" data-aos-duration="2000">Vá até a página <strong>sobre</strong></p>
				<a href="{{route('sobre')}}" class="btn" data-aos="fade-up" data-aos-duration="2000">Ver mais</a>	
				</div>
				</div>
			</div>
		</div>
	</div>
	
</div>