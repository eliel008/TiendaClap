@if(Auth::check())
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
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i><span class="caret"></span>
		</a>
		<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
			<a href="{{ route('register') }}">&nbsp&nbsp&nbsp Registrarse</a><hr>
			<a href="{{ route('login') }}">&nbsp&nbsp&nbsp Iniciar Sesión</a>
		</ul>
	</li>
@endif