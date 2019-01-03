@extends('welcome')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
	<h1>{{'Projetos'}}</h1>
    
    @foreach($content_all as $content)
    	<article>
    		<h3 class="titulo_projeto"> {{$content['nome']}} </h3>
    		<p class="descricao_projeto "> {{$content['descricao']}} </p>
    		
    	</article>
    @endforeach

@endsection

