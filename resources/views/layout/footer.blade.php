<div class="container pt-5 pb-1" id="footer">
	{{-- <div class="losangle"></div> --}}
	<div class="col-md-6 text-center m-auto">
		<img src="{{asset('/img/carlos.jpeg')}}" class="rounded-circle" width="200">
		<p class="mt-2">
			Possui graduação em Tecnologia em Informática pela Unicamp (2003), mestrado em Engenharia Elétrica pela Unicamp (2005) e doutorado em Engenharia Elétrica pela Unicamp (2010). 
		</p>
		<p class="">Atualmente é professor no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo (IFSP), câmpus Itapetininga, e coordenador da Especialização de Informática Aplicada à Educação nesta unidade. </p> 
	</div>
	<div class="row copyright_footer_content">
		<div class="col-md-4 col-12 text-center">
			<p class="">Minhas Redes Sociais</p>
			<p><a href="{{$content_all['institucional']['social']['linkedin']}}" target="_blank">Linkedin</a> - Twitter - <a href="{{$content_all['institucional']['social']['google-plus']}}" target="_blank">Google Plus</a></p>
		</div>
		<div class="col-md-4 col12 text-center text-center order-xs-first mb-2 mb-md-0">
			<img src="{{asset('/img/logo_white.png')}}" class="m-auto" width="50">
		</div>
		<div class="col-md-4 col-12 text-center text-right">
			<p class="">Dúvidas? Entre em contato</p>
			<p><a href="tel:{{$content_all['institucional']['social']['fone']}}">{{$content_all['institucional']['social']['fone']}}</a> | <a href="mailto:{{$content_all['institucional']['social']['email']}} ">{{$content_all['institucional']['social']['email']}}</a></p>
		</div>
	</div>
</div>
