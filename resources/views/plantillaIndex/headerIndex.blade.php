
 <header>
   <h2><a href="#">Website Logo</a></h2>
   <nav>
     {{-- @if (false)
       <li><a href="formulario.php">¡Registrate!</a></li>
       <li> | </li>
       <li><a href="login.php">Login</a></li>
     @else
       <li><a href="logout.php">Cerrar Sesion</a></li>
       <li> | </li>
       <li><a href="#">¡Bienvenido!</a></li>
     @endif --}}
     <ul class="navbar-nav ml-auto">
         <!-- Authentication Links -->
         @guest
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>
         @else
               <li>
                 <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Cerrar sesión') }} </a>
               </li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>

                     {{-- <li class="nav-item">
                         <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                       </li>


                       <ul class="nav nav-pills">
                         <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                           <div class="dropdown-menu">
                             <a class="dropdown-item" href="#">Mi perfil</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="#">Cerrar sesión</a>
                           </div>
                         </li>

                       </ul> --}}

                       <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>

                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
         @endguest
     </ul>
   </nav>
 </header>
