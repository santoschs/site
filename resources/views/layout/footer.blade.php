<div class="container-minor py-5">
	<div class="losangle"></div>
	
	<div class="col-md-5 text-center m-auto mt-3">
		<div class="row text-center">
		<img src="{{URL::to('/')}}/img/logo_white.png" class="logo img-fluid">
	</div>
	<div class="row">
		<img src="{{URL::to('/')}}/img/escrito_white.png" class="escrito img-fluid my-2">
	</div>
		@php
		echo $content_all['institucional']['footer']
		@endphp
	</div>
</div>
<div class="container-fluid copyright">
	<div class="container">
		<div class="text-center">
			© Copyright - carlos-santos.com
		</div>
	</div>
</div>