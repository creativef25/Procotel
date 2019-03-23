@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Usuarios</a>
  </div>
@endpush
@section('container')
  @if(Session::has('success'))
      <div class="alert alert-info">
        {{Session::get('success')}}
      </div>
      @endif
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">Usuario</h2>
              <p class="card-category">Ingresa la información que se te pide</p>
            </div>
            <div class="card-body">
              <form action="{{ route('usuarios.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Nombre</label>
                      <input type="text" class="form-control" name="name" id="nombreUsuario" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Correo</label>
                      <input type="text" class="form-control" name="email" id="correoUsuario" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="text" class="form-control" name="password" id="passwordUsuario" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Roles</label>
                      <select multiple class="form-control" name="id_rol" id="id_rol">
                        @foreach ($rol as $roles)
                          <option class="text-info" value="{{ $roles->id}}">{{$roles->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">Datos registrados</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Tipo de rol</th>
                      <th>Acciónes</th>
                    </tr>
                  </thead>
                    @foreach ($usu as $usua)
                      <tbody>
                      <tr>
                        <td>{{$usua->id}}</td>
                        <td>{{$usua->name}}</td>
                        <td>{{$usua->email}}</td>
                        <td>{{$usua->id_rol == 1 ? 'Administrador' : 'Usuario'}}</td>
                        <td class="td-action text-left btn-group">
                          <button type="button" rel="tooltip" data-toggle="modal" data-target="#usu{{$usua->id}}" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                            <i class="material-icons">edit</i>
                          </button>
                          <form action="{{route('usuarios.destroy', $usua->id)}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Eliminar">
                              <i class="material-icons">close</i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach ($usu as $modalUsu)
    <div class="modal fade" id="usu{{$modalUsu->id}}" tabindex="-1" role="dialog" aria-labelledby="usuLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="usuLabel">Modificar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('usuarios.update', $modalUsu->id)}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PUT">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Nombre</label>
                  <input type="text" class="form-control text-info" name="name" id="nombreUsuario" value="{{ $modalUsu->name}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Correo</label>
                  <input type="text" class="form-control text-info" name="email" id="correoUsuario" value="{{ $modalUsu->email}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Roles</label>
                  <select multiple class="form-control" name="id_rol" id="id_rol">
                    @foreach ($rol as $roles)
                      <option class="text-info" value="{{ $roles->id}}">{{$roles->descripcion}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach



@endsection
