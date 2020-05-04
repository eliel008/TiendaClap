<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	  <a class="navbar-brand main-title" href="{{ route('admin') }}">Movilnet</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
	  	<span class="navbar-text"><i class="fa fa-dashboard"> Dashboard</i></span>

		<div class="collapse navbar-collapse" id="navbarColor03">
		    <ul class="navbar-nav mr-auto">
		    </ul>
		    <ul class="navbar-nav mL-auto">
			    <li><a href="{{ route('category.index') }}">Categorias</a></li>&nbsp&nbsp&nbsp&nbsp
				<li><a href="{{ route('product.index') }}">Productos</a></li>&nbsp&nbsp&nbsp&nbsp
				<li><a href="#">Pedidos</a></li>&nbsp&nbsp&nbsp&nbsp
				<li><a href="{{ route('user.index') }}">Usuarios</a></li>&nbsp&nbsp&nbsp&nbsp
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" role="menu">
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">&nbsp&nbsp&nbsp
									Cerrar Sesión
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
							</form>
						</li>
					</ul>
				</li>
			</ul>
	  	</div>
  	</div>
</nav>