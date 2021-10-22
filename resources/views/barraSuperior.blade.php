<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand  animate__animated animate__bounce" href="/"><img src="/imagenes/biblioteca-enlace-libre.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" id="items-navegacion">
        <li class="nav-item active">
            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/proyecto">Proyecto/ayuda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/edita">Editá</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/colabora">Colaborá</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorías
            </a>
            <div class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdownMenuLink">
                <a href="/novela" class="dropdown-item alert-warning">Novela</a>
                <a href="/cuento" class="dropdown-item alert-warning">Cuento</a>
                <a href="/ensayo" class="dropdown-item alert-warning">Ensayo</a>
                <a href="/poesia" class="dropdown-item alert-warning">Poesía</a> 
            </div>
        </li>
        </ul>
    </div>

      <!-- Right Side Of Navbar -->
        <ul style="float:right;">            
        <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
                <li class="nav-item" style="float:left;">
                    <a class="nav-link" href="/login"><span class="text-light"><i class="fas fa-user-lock"></i> {{ __('login.login2') }}</span></a>
                </li>
                <li class="nav-item" style="float:right;">
                    <a class="nav-link" href="/register"><span class="text-light"><i class="fas fa-user-astronaut"></i> Registrarse</span></a>
                </li>
            @endif

            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuario: {{ Auth::user()->name }}
                    </a>
                    
                    <div class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item alert-warning" href="/usuario">Mis Libros</a>
                        <a class="dropdown-item alert-warning" href="/ingresarLibro">Cargar libro nuevo</a>
                        <a class="dropdown-item alert-warning" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                           Salir
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </li>


            @endguest
        </ul>

       


</nav>









  