<div class="losangle"></div>
<div class="losangle"></div>
<div class="container">
	<p class="indicator text-center text-uppercase  mb-3" data-aos="fade-up" data-aos-duration="2000">bem vindo!</p>
	<div class="row">
		<div class="col-md-4" data-aos="fade-right" data-aos-duration="2000">
			<img src="{{URL::to('/')}}/img/coding.svg" class="img-fluid" width="300">	
		</div>
		<div class="col-md-8">
			<p class="lead pt-2" data-aos="fade-left" data-aos-duration="2000">
				@php
				// var_dump($content_all);
				echo $content_all['institucional']['about'];
				@endphp
			</p>
		</div>
	</div>
	<div class="text-center  mt-1">
		<p class="lead" data-aos="fade-up" data-aos-duration="2000">Quer saber mais sobre mim?</p>
		<a href="{{URL::to('/sobre')}}" class="btn mt-1" data-aos="fade-up" data-aos-duration="2000">Ver mais</a>
	</div>
</div>