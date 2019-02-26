<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Página não encontrada</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/app.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="error_page" style="overflow: hidden;">
	<main>
		<div class=" col-md-8 col-sm-10 m-auto text-center">
			<div class="">
				<h1 class="mt-5"><i class="fas fa-exclamation-triangle"></i></h1>
				<h1 class="mt-3">Página não encontrada</h1>
				<p>erro 404</p>
				<a href="{{route('home')}}" class="btn mt-3">Voltar a página incial</a>
			</div>
			<img src="{{URL::to('/')}}/img/logo.png" class="img-fluid mt-9" width="50">
			<p class="small">www.carlos-santos.com</p>
		</div>
	</main>
</body>
</html>