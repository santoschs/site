<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="{{URL::to('/')}}/img/logo.png" width='60'></a>
				<div class="ml-auto">
					<a  id="show_menu_button">
						<img src="{{URL::to('/')}}/img/menu.svg">
					</a>
				</div>
				<div class="show_navbar" id="navbar">
					<ul class="navbar-nav"> 
						<li class="nav-item">
							<a class="nav-link">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">Parceiros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">Projetos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">Sobre mim</a>
						</li>	
						<li class="nav-item">
							<a class="nav-link">Contato</a>
						</li>	
						<li>
							<p>Carlos H. Silva Santos 
								<br><a href="mailto:santos.chs@gmail.com"><i class="far fa-envelope"></i> santos.chs@gmail.com</a>
								<br><a href="tel:+5515981359639"><i class="fas fa-mobile-alt"></i> +55 15 98135-9639</a>
							</p>
						</li>
					</ul>
					<a id="close_menu">
						<img src="{{URL::to('/')}}/img/cross-symbol.svg">
					</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="losangle"></div>
			<div class="losangle"></div>
			<div class="col">
				<div class="row">
					<img src="{{URL::to('/')}}/img/logo.png" class="logo">	
				</div>
				<div class="row">
					<h1 class="text-center m-auto mt-3">Carlos H. Silva-Santos</h1>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section id="about" class="py-8">
			<div class="losangle"></div>
			<div class="losangle"></div>
			<div class="container-minor text-center">
				<p class="lead">Bem vindo ao meu site! Aqui estão reunidas páginas que falam um pouco <strong>sobre mim</strong>, e sobre <strong>projetos</strong> que venho desenvolvendo além de <strong>alunos, instituições e parceiros</strong> ccom quem trabalhei.</p>
				<div class="text-center mt-3">
					<a href="{{URL::to('/sobre')}}" class="btn">Sobre mim</a>
				</div>
			</div>
		</section>
		<section id="projects" class="pt-12">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<p class="lead">Veja um pouco de alguns projetos que me envolvi e desenvolvi durante minha carreira. Veja mais destes na página <strong>projetos</strong></p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="project">
							<div class="project-figure">
								<img src="{{URL::to('/')}}/img/panda.jpg">
							</div>
							<h1>Panda</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project">
							<div class="project-figure">
								<img src="{{URL::to('/')}}/img/frozen.jpg">
							</div>
							<h1>Frozen Waves</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project">
							<div class="project-figure">
								<img src="{{URL::to('/')}}/img/example.jpg">
							</div>
							<h1>Projeto de exemplo</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="container-minor py-5">
			<div class="losangle"></div>
			<div class="text-center">
				<img src="{{URL::to('/')}}/img/logo.png" width="100">
			</div>
			<div class="col-md-5 text-center m-auto mt-3">
				<p >Possui graduação em Tecnologia em Informática pela Universidade Estadual de Campinas (2003), mestrado em Engenharia Elétrica pela Universidade Estadual de Campinas (2005) e doutorado em Engenharia Elétrica pela Universidade Estadual de Campinas (2010)</p>
				<p>
					Atualmente é professor no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo (IFSP), câmpus Itapetininga, e coordenador da Especialização de Informática Aplicada à Educação nesta unidade. 
				</p>
				<p>
					Também possui experiências internacionais, atuando como professor visitante, com bolsa FAPESP, no Massachusetts Institute of Technology (MIT) (Dez/2012-Fev/2013), pesquisador visitante na Cornell University (2010) e na Technische Universität München (2009) sob o financiamento do Programa Erasmus Mundus (Eubranex). Suas pesquisas se concentram em inteligência computacional, computação de alto desempenho, eletromagnetismo computacional e informática na educação.
				</p>
			</div>
		</div>
		<div class="container-fluid copyright">
			<div class="container">
				<div class="text-right">
					© Copyright - carlos-santos.com
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="{{URL::to('/')}}/js/app.js"></script>
	<script type="text/javascript" src="{{URL::to('/')}}/js/main.js"></script>
</body>
</html>
