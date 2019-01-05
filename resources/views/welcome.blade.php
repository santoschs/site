@extends('layout.app')
@section('content')
<section id="sobre_mim">
	<div class="container-fluid py-5">
		<div class="container text-center">
			<center>
				<div class="corte-imagem">
					<img src="{{URL::to('/')}}/img/carlos2.jpg">
				</div>
			</center>
			<div class="row justify-content-center mt-3">
				<h1 class="uppercase">Sobre Mim</h1>
			</div>
		</div>
	</div>

</section>
@endsection