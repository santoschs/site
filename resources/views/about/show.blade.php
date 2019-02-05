<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('metainformation')
	<title>Sobre - Carlos Santos</title>
</head>
<body class="sobre">
	<header class="">
		<div class="video-bg">
			<video autoplay>
				<source src="{{URL::to('/')}}/video/macbook_video.m4v" type="video/mp4">
				</video>
			</div>
			@include('layout.navbar')
			<div class="row">
				<div class="container">
					<img src="{{URL::to('/')}}/img/logo_white.png" class="row m-auto " width="100">
					<span class="divisor mb-1 mt-3"></span>
					<h1 class="text-center ">Sobre mim</h1>
					<span class="divisor mt-1"></span>
					<p class="m-auto text-center mt-1 lead">Uma breve parte de quem sou</p>
				</div>
			</div>
			<a class="mouse_scroll mb-10 text-center" href="#text_about">
				<p class="uppercase">scroll</p>
				<img src="{{URL::to('/')}}/img/mouse.svg">
			</a>
		</header>
		<main>
			<div class="parallax">
				<img src="{{URL::to('/')}}/img/bg_sobre.jpg">
			</div>
			<div class="parallax">
				<img src="{{URL::to('/')}}/img/bg_alunos.jpg">
			</div>
			<section id="text_about">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="img_carlos picture rounded-circle mt-5" >
								<img src="{{URL::to('/')}}/img/carlos.jpeg" class="  " width="300">
								<div class="more">
									<div class="links">
										<a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
										<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
										<a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
										<a href="#" target="_blank"><i class="fab fa-github"></i></a>
									</div>
								</div>
							</div>
							<div class="menu_sobre">
								<a href="#first">Minha história</a>
								<a href="#second">Experiência</a>
								<a href="#third">Formação Acadêmica</a>
								<a href="#fourth">Áreas de pesquisa</a>
							</div>
						</div>
						<div class="col-md-8">
							{{-- <img src="{{URL::to('/')}}/img/escrito_white.png" class="mb-2 row m-auto mt-1" width="400"> --}}
							<div class="row">
								<h2 id="first" class="pt-5">Minha história</h2>
								<span class="divisor black"></span>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="row" id="second">
								<h2 class="pt-5">Minha Experiência</h2>
								<span class="divisor black"></span>
								<div class="col-md-12">
									<div class="experience">
										<div class="experience_item">
											<h3>Professor</h2>
											<p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo</p>
											<img src="">
										</div>
										<div class="experience_item">
											<h3>Professor Visitante</h2>
											<p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo</p>
											<img src="">
										</div>
										<div class="experience_item">
											<h3>Professor Visitante</h2>
											<p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo</p>
											<img src="">
										</div>
									</div>
								</div>
							</div>
							<div class="row" id="third">
								<h2 class="pt-5">Formação Acadêmica</h2>
								<span class="divisor black"></span>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="row" id="fourth">
								<h2 class="pt-5">Áreas de pesquisa</h2>
								<span class="divisor black"></span>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="conhecimento">
				<div class="container py-5">
					<h2>Conhecimentos, ferramentas e tecnologias</h2>
					<div class="cards">
						<div>
							<p>Simulações</p>
						</div>
					</div>
				</div>
			</section>
		</main>
	{{-- <footer>
		@include('layout.footer')
	</footer> --}}
	@include('scripts')
</body>
</html>
