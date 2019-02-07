<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('metainformation')
	<title>Carlos Santos</title>
</head>
<body>
	<header>
		<div class="video-bg" id="video_bg">
			<video autoplay preload>
				<source src="{{URL::to('/')}}/video/macbook_video.m4v" preload type="video/mp4">
				</video>
			</div>
			@include('layout.navbar')
			<div class="container">

				<div class="">
					<div class="row" data-aos="fade-up" data-aos-duration="2000" >
						<img src="{{URL::to('/')}}/img/logo_white.png" class="logo">	
					</div>
					<div class="row" data-aos="fade-up" data-aos-duration="3000">
						<img src="{{URL::to('/')}}/img/escrito_white.png" class="escrito">
					</div>
					<div class="row ">
						{{-- <p class="lead text-center m-auto f_500 mt-3">Doutor, Professor, Pai e </p> --}}
					</div>
				</div>
			</div>
			<a class="mouse_scroll mb-10 text-center" href="#about">
				<p class="uppercase">scroll</p>
				<img src="{{URL::to('/')}}/img/mouse.svg">
			</a>
		</header>
		<main>
			<section id="about" class="py-4">
				@include('layout.sect_about')
			</section>
			<section id="projects" class="py-5">
				@include('layout.sect_project')
			</section>
			<section id="alunos" class="py-5">
				@include('layout.sect_alunos')
			</section>
		</main>
		<footer>
			@include('layout.footer')
		</footer>
		@include('scripts');
	</body>
	</html>
