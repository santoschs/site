<div class="container">
	<div class="row text-center">
		<div class="col-md-12">
			{{-- <img src="{{URL::to('/')}}/img/handshake.svg" width="150" class="mt-3" data-aos="fade-up" data-aos-duration="1000"> --}}
			<h1 class="title" data-aos="fade-up" data-aos-duration="1000">Colaboradores</h1>
			<p class="" data-aos="fade-up" data-aos-duration="1500">
				@php 
				echo( $content_all["institucional"]["colaboradores"]);
				@endphp
			</p>
			<div class="carousel" data-flickity='{ "groupCells": true }'>
				@foreach ($content_all['colaboradores'] as $aluno)
				<div class="carousel-cell">
					{{-- @if ($content == $aluno['id']) --}}
					<div class="aluno">
						<a href="{{ route('aluno', ['id' => $aluno['id']]) }}">
							<div class="img-aluno">
								<img src="{{asset('/img/alunos/'.$aluno['img'])}}" class="img-fluid">
							</div>
							<p class="nome text-center mt-1">{{explode(' ', $aluno['nome'])[0] .' '. explode(' ', $aluno['nome'])[1]}}</p>
						</a>
					</div>					
				</div>
				@endforeach
			</div>
			<div class="col-md-6 m-auto">
				<p class=" mt-5" data-aos="fade-up" data-aos-duration="2500">Ficou curioso? Conheça alguns deles</p>
				<a class="btn" href="{{route('colaboradores')}}" data-aos="fade-up" data-aos-duration="2000">Ver mais</a>
			</div>
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