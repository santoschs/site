<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Carlos Santos</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/app.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="aluno">
	<header>
		@include('layout.navbar')
		{{-- <div class="img_background_project">
			<img src="{{URL::to('/')}}/img/projetos/{{$content_all['projeto']['img']}}">
		</div> --}}
		<div class="container">
			<div class="losangle"></div>
			<div class="losangle"></div>
			<h1>{{$content_all['projeto']['nome']}}</h1>
			<div class="col-md-8 m-auto text-center">
				<h2>{{$content_all['projeto']['descricao_curta']}}</h2>
			</div>
		</div>
	</header>
	<main>
		@if (!empty($content_all['projeto']['resumo']))
		
		@endif
		<div class="losangle"></div>
		<div class="losangle"></div>
	</main>	
	<footer>
		@include('layout.footer')
	</footer>
	<script type="text/javascript" src="{{URL::to('/')}}/js/app.js"></script>
	<script type="text/javascript" src="{{URL::to('/')}}/js/main.js"></script>
</body>
</html>