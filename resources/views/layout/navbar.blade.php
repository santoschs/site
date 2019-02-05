<nav class="navbar navbar-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{route('home')}}">
					<img src="{{URL::to('/')}}/img/logo_white.png" width='60' class="logo_white">
					<img src="{{URL::to('/')}}/img/logo.png" width='60' class="logo_black"></a>
				<div class="ml-auto">
					<a  id="show_menu_button">
						<img class="logo_white" src="{{URL::to('/')}}/img/menu_white.svg">
						<img class="logo_black" src="{{URL::to('/')}}/img/menu.svg">
					</a>
				</div>
				<div class="show_navbar" id="navbar">
					<ul class="navbar-nav"> 
						<li class="nav-item">
							<a class="nav-link" href="{{route('home')}}">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('parceiros')}}">Parceiros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('projetos')}}">Projetos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('sobre')}}">Sobre mim</a>
						</li>	
						<li class="nav-item">
							<a class="nav-link" href="{{route('contato')}}">Contato</a>
						</li>	
						<li>
							<p>Carlos H. Silva Santos 
								<br><a href="mailto:santos.chs@gmail.com"><i class="far fa-envelope"></i> santos.chs@gmail.com</a>
								<br><a href="tel:+5515981359639"><i class="fas fa-mobile-alt"></i> +55 15 98135-9639</a>
							</p>
						</li>
						<div id="google_translate_element"></div>
					</ul>
					<a id="close_menu">
						<img src="{{URL::to('/')}}/img/cross-symbol.svg">
					</a>
				</div>
			</div>
		</nav>