<nav class="navbar navbar-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/img/logo.png" width='60'></a>
				<div class="ml-auto">
					<a  id="show_menu_button">
						<img src="{{URL::to('/')}}/img/menu.svg">
					</a>
				</div>
				<div class="show_navbar" id="navbar">
					<ul class="navbar-nav"> 
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/')}}">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/parceiros')}}">Parceiros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/projetos')}}">Projetos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/about')}}">Sobre mim</a>
						</li>	
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/contact')}}">Contato</a>
						</li>	
						<li>
							<p>Carlos H. Silva Santos 
								<br><a href="mailto:santos.chs@gmail.com"><i class="far fa-envelope"></i> santos.chs@gmail.com</a>
								<br><a href="tel:+5515981359639"><i class="fas fa-mobile-alt"></i> +55 15 98135-9639</a>
							</p>
						</li>
					</ul>
					<a id="close_menu">
						<img src="{{URL::to('/')}}/img/cross-symbol.svg">
					</a>
				</div>
			</div>
		</nav>