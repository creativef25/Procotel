<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4">
  <!-- Logo -->
  <a href="{{ route('procotel')}}" class="logo">
    <img src="{{ asset('carrito/images/icons/procotel.png')}}" alt="IMG-LOGO">
  </a>

  <!-- Menu -->
  <div class="wrap_menu">
    <nav class="menu">
      <ul class="main_menu">
        <li>
          <a href="{{ route('procotel') }}">Inicio</a>
        </li>

        <li>
          <a href="{{ route('tienda')}}">Amigo Kit</a>
        </li>

        <li>
          <a href="javascript:void(0);">Planes</a>
          <ul class="sub_menu">
            <li>
              <a href="javascript:void(0);">Empresas</a>
              <ul class="sub_menu">
                <li><a href="{{ route('precios')}}">Planes Empresariales</a></li>
                <li><a href="{{ route('equipos')}}">Equipos</a></li>
              </ul>
            </li>
            <li><a href="{{ route('sinLimite')}}">Personal</a></li>
          </ul>
        </li>

        <li>
          <a href="{{ route('valorA')}}">Servicios de valor agregado</a>
        </li>

        <li>
          <a href="{{ route('promo')}}">Promociones</a>
        </li>

        <li>
          <a href="{{ route('nosotros')}}">Nosotros</a>
        </li>

        <li>
          <a href="{{ route('contacto')}}">Contacto</a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- Header Icon -->
  <div class="header-icons">
    <div class="header-wrapicon2 m-r-13">
      <img src="{{ asset('carrito/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
      <div class="header-cart header-dropdown">
        <ul class="header-cart-wrapitem">

          @if (Auth::check())
          <li class="header-cart-item">
            <span>{{ Auth::user()->name}}</span>
          </li>
          <li class="header-cart-item">
            <span>
              <a href="{{ route('perfil')}}">Perfil</a>
            </span>
          </li>
          <li class="header-cart-item">
            <form action="{{ route('logout')}}" method="post">
              {{ csrf_field() }}
              <button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="button">Cerrar Session</button>
            </form>
          </li>
          @else
            <li class="header-cart-item">
              <span>Ingresa</span>
              <form class="" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <input id="email" type="email" class="form-control s-text7 bg6 w-full p-b-5" placeholder="Correo" name="email" value="{{ old('email') }}" required autofocus><br>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <input id="password" placeholder="Contraseña" type="password" class="form-control bg6 w-full p-b-5" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-sm-12">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme
                    </label>
                  </div>
                  <button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="button">enviar</button>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      Olvidaste tu contraseña?
                  </a>
                  <a class="btn btn-link" href="{{ route('register') }}">
                        Registrate
                  </a>
                </div>
              </form>
            </li>

          @endif
        </ul>
      </div>
    </div>

    <span class="linedivide1"></span>

    <div class="header-wrapicon2">
      <a href="{{ route('carrito-show')}}">
        <img src="{{ asset('carrito/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
        <span class="header-icons-noti">{{ count(Session::get('carrito'))}}</span>
      </a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="header2">
  <!-- Header desktop -->
  <div class="container-menu-header-v2 p-t-26">
    <div class="topbar2">
      <div class="topbar-social">
        <a href="#" class="topbar-social-item fa fa-facebook"></a>
        <a href="#" class="topbar-social-item fa fa-twitter"></a>
      </div>

      <!-- Logo2 -->
      <a href="{{ route('procotel')}}" class="logo2">
        <img src="{{ asset('carrito/images/icons/procotel.png')}}" alt="IMG-LOGO">
      </a>

      <div class="topbar-child2">
        <!--  -->

        <div class="header-wrapicon2 m-r-13">
          <img src="{{ asset('carrito/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
          <div class="header-cart header-dropdown">
            <ul class="header-cart-wrapitem">
              @if (Auth::check())
              <li class="header-cart-item">
                <span>{{ Auth::user()->name}}</span>
              </li>
              <li class="header-cart-item">
                <span>
                  <a href="{{ route('perfil')}}">Perfil</a>
                </span>
              </li>
              <li class="header-cart-item">
                <form action="{{ route('logout')}}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="button">Cerrar Session</button>
                </form>
              </li>
              @else
              <li class="header-cart-item">
                <span>Ingresa</span>
                <form class="" action="{{ route('login') }}" method="post">
                  {{ csrf_field() }}
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input id="email" type="email" class="form-control s-text7 bg6 w-full p-b-5" placeholder="Correo" name="email" value="{{ old('email') }}" required autofocus><br>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif

                      <input id="password" placeholder="Contraseña" type="password" class="form-control bg6 w-full p-b-5" name="password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="col-sm-12">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme
                      </label>
                    </div>
                    <button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="button">enviar</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Olvidaste tu contraseña?
                    </a>
                    <a class="btn btn-link" href="{{ route('register') }}">
                          Registrate
                    </a>
                  </div>
                </form>
              </li>
              @endif
            </ul>
          </div>
        </div>

        <span class="linedivide1"></span>

        <div class="header-wrapicon2 m-r-13">
          <a href="{{ route('carrito-show')}}">
            <img src="{{ asset('carrito/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">{{ count(Session::get('carrito'))}}</span>
          </a>
        </div>
      </div>
    </div>

    <div class="wrap_header">

      <!-- Menu -->
      <div class="wrap_menu">
        <nav class="menu">
          <ul class="main_menu">
            <li>
              <a href="{{ route('procotel') }}">Inicio</a>
            </li>

            <li>
              <a href="{{ route('tienda')}}">Amigo Kit</a>
            </li>

            <li>
              <a href="javascript:void(0);">Planes</a>
              <ul class="sub_menu">
                <li>
                  <a href="javascript:void(0)">Empresas</a>
                  <ul class="sub_menu">
                    <li><a href="{{ route('precios')}}">Planes Empresariales</a></li>
                    <li><a href="{{ route('equipos')}}">Equipos</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('sinLimite')}}">Personal</a></li>
              </ul>
            </li>

            <li>
              <a href="{{ route('valorA')}}">Servicios de valor agregado</a>
            </li>

            <li>
              <a href="{{ route('promo')}}">Promociones</a>
            </li>

            <li>
              <a href="{{ route('nosotros')}}">Nosotros</a>
            </li>

            <li>
              <a href="{{ route('contacto')}}">Contacto</a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Header Icon -->
      <div class="header-icons">

      </div>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap_header_mobile">
    <!-- Logo moblie -->
    <a href="{{ route('procotel')}}" class="logo-mobile">
      <img src="{{ asset('carrito/images/icons/procotel.png')}}" alt="IMG-LOGO">
    </a>

    <!-- Button show menu -->
    <div class="btn-show-menu">
      <!-- Header Icon mobile -->
      <div class="header-icons-mobile">
        <div class="header-wrapicon2 m-r-13">
          <img src="{{ asset('carrito/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
          <div class="header-cart header-dropdown">
            <ul class="header-cart-wrapitem">
              @if (Auth::check())
              <li class="header-cart-item">
                <span>{{ Auth::user()->name}}</span>
              </li>
              <li class="header-cart-item">
                <span>
                  <a href="{{ route('perfil')}}">Perfil</a>
                </span>
              </li>
              <li class="header-cart-item">
                <form action="{{ route('logout')}}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="button">Cerrar Session</button>
                </form>
              </li>
              @else
              <li class="header-cart-item">
                <span>Ingresa</span>
                <form class="" action="{{ route('login') }}" method="post">
                  {{ csrf_field() }}
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <input id="email" type="email" class="form-control s-text7 bg6 w-full p-b-5" placeholder="Correo" name="email" value="{{ old('email') }}" required autofocus><br>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif

                      <input id="password" placeholder="Contraseña" type="password" class="form-control bg6 w-full p-b-5" name="password" required>

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="col-sm-12">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme
                      </label>
                    </div>
                    <button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="button">enviar</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Olvidaste tu contraseña?
                    </a>
                    <a class="btn btn-link" href="{{ route('register') }}">
                          Registrate
                    </a>
                  </div>
                </form>
              </li>
              @endif
            </ul>
          </div>
        </div>

        <span class="linedivide2"></span>

        <div class="header-wrapicon2">
          <a href="{{ route('carrito-show')}}">
            <img src="{{ asset('carrito/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">{{ count(Session::get('carrito'))}}</span>
          </a>
        </div>
      </div>

      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </div>
    </div>
  </div>

  <!-- Menu Mobile -->
  <div class="wrap-side-menu" >
    <nav class="side-menu">
      <ul class="main-menu">
        <li class="item-topbar-mobile p-l-10">
          <div class="topbar-social-mobile">
            <a href="#" class="topbar-social-item fa fa-facebook"></a>
            <a href="#" class="topbar-social-item fa fa-twitter"></a>
          </div>
        </li>

        <li class="item-menu-mobile">
          <a href="{{ route('procotel') }}">Inicio</a>
        </li>

        <li class="item-menu-mobile">
          <a href="{{ route('tienda')}}">Amigo Kit</a>
        </li>

        <li class="item-menu-mobile">
          <a href="javascript:void(0);">Planes</a>
          <ul class="sub-menu">
            <li>
              <a href="javascript:void(0);">Empresas</a>
              <ul class="sub-menu">
                <li><a href="{{ route('precios')}}">Planes Empresariales</a></li>
                <li><a href="{{ route('equipos')}}">Equipos</a></li>
              </ul>
            </li>
            <li><a href="{{ route('sinLimite')}}">Personal</a></li>
          </ul>
          <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
        </li>

        <li class="item-menu-mobile">
          <a href="{{ route('valorA')}}">Servicios de valor agregado</a>
        </li>

        <li class="item-menu-mobile">
          <a href="{{ route('promo')}}">Promociones</a>
        </li>

        <li class="item-menu-mobile">
          <a href="{{ route('nosotros')}}">Nosotros</a>
        </li>

        <li class="item-menu-mobile">
          <a href="{{ route('contacto')}}">Contacto</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
