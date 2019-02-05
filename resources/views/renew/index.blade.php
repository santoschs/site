<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('metainformation')
	<title>Carlos Santos</title>
</head>
<body>
	<header>
		<div class="video-bg">
			<video autoplay preload>
				<source src="{{URL::to('/')}}/video/macbook_video.m4v" preload type="video/mp4">
				</video>
			</div>
			@include('layout.navbar');
		</header
	</body>
	</html>
