@extends('carrito')

@section('containerC')

  <section class="bgwhite p-t-66 p-b-60">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-b-30"></div>
        <div class="col-md-4 p-b-30 text-center">
          <form class="leave-comment" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <h4 class="m-text26 p-b-36 p-t-15">Registrate</h4>
            <label for="name" class="col-md-12 control-label">Nombre</label>
            <div class="form-group bo4 of-hidden size15 m-b-20 {{ $errors->has('name') ? ' has-error' : '' }}">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <label for="email" class="col-md-4 control-label">Correo</label>
            <div class="form-group bo4 of-hidden size15 m-b-20 {{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <label for="password" class="col-md-4 control-label">Contraseña</label>
            <div class="form-group bo4 of-hidden size15 m-b-20 {{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>
            <div class="form-group bo4 of-hidden size15 m-b-20">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
          </form>

        </div>
        <div class="col-md-4 p-b-30"></div>
      </div>

    </div>

  </section>

@endsection
