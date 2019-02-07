<div class="container">
	<div class="row text-center">
		<div class="col-md-12">
			<img src="{{URL::to('/')}}/img/handshake.svg" width="150" class="mt-3" data-aos="fade-up" data-aos-duration="1000">
			<p class="indicator text-uppercase mb-3" data-aos="fade-up" data-aos-duration="1000">Alunos e parceiros</p>
			<p class="lead" data-aos="fade-up" data-aos-duration="1500">
				@php 
				echo( $content_all["institucional"]["alunos"]);
				@endphp
			</p>
			<p class="lead mt-5" data-aos="fade-up" data-aos-duration="2500">Ficou curioso? Conheça alguns deles</p>
			<a class="btn" href="{{route('alunos')}}" data-aos="fade-up" data-aos-duration="2000">Ver mais</a>
		</div>
	</div>
	{{-- <div class="row mt-3">
		@foreach ($content_all['alunos'] as $aluno)
		<div class="aluno col-md-3">
			<a href="{{ route('aluno', ['id' => $aluno['id']]) }}">
				<div class="img-aluno">
					<img src="{{URL::to('/')}}/img/alunos/{{$aluno['img']}}">
				</div>
				<h1>{{explode(' ', $aluno['nome'])[0] .' '. explode(' ', $aluno['nome'])[1]}}</h1>
				<h2>{{$aluno['class']}}</h2>
				<a class="link" href="{{ route('aluno', ['id' => $aluno['id']]) }}">Ver mais</a>
			</a>
		</div>
		@endforeach
	</div> --}}
</div>