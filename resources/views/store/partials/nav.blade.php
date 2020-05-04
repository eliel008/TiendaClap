{{--<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-togle="callapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigaton</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand main-title" href="#">Movilnet</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<p class="navbar-text">TiendaClapMovilnet</p>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
				<li><a href="#">Conocenos</a></li>
				<li><a href="#">Contactanos</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aroa-expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Iniciar sesión</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	  <a class="navbar-brand main-title" href="{{ route('home') }}">Movilnet</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
	  	<span class="navbar-text">Tienda Clap Movilnet</span>

		<div class="collapse navbar-collapse" id="navbarColor03">
		    <ul class="navbar-nav mr-auto">
		    </ul>
		    <ul class="navbar-nav mL-auto">
		    	<li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>&nbsp&nbsp&nbsp&nbsp
			    <li><a href="#">Conocenos</a></li>&nbsp&nbsp&nbsp&nbsp
				<li><a href="#">Contactanos</a></li>&nbsp&nbsp&nbsp&nbsp
				@include('store.partials.menu-user')
			</ul>
	  	</div>
  	</div>
</nav>