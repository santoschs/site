<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">CS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Sobre</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/projetos')}}">Projetos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="section">
			<center>
				<img class="mt-10 logo" src="{{URL::to('/')}}/img/carlos_santos.png">
			</center>
		</div>
		<img class="triangle-right" src="{{URL::to('/')}}/img/losangle.png">
	</header>
	<main>
		@yield('content')   
	</main>
	<footer>
		<div class="container-fluid">
			<div class="container">
				<section id="sobre">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-2">
									<img src="{{URL::to('/')}}/img/paper-plane.svg" class="img-fluid">
								</div>
								<div class="col-md-9">
									<h3>Entre em contato</h3>
									<p>Quer saber um pouco mais? Me envie uma mensagem</p>
								</div>
							</div>
							<form class="mt-1">
								<div class="form-group">
									{{-- <label for="email">Seu email</label> --}}
									<input id="email" class="form-control" type="email" name="email" placeholder="Digite seu email">
								</div>
								<div class="form-group">
									{{-- <label for="exampleFormControlTextarea1">Sua mensagem</label> --}}
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Sua mensagem" rows="3"></textarea>
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn">
										Enviar
									</button>
								</div>
							</form>
						</div>
						<div class="col-md-6">

						</div>
					</div>
				</section>
				<section id="copyright">
					<p class="text-center">© Carlos Santos 2019. Todos os direitos reservados </p>
				</section>
			</div>
		</div>
		<img src="{{URL::to('/')}}/img/losangle.png" class="losangle-right-footer">
	</footer>
</body>
</html>
