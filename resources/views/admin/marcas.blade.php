@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Marcas</a>
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
              <h2 class="card-title">Marcas</h2>
              <p class="card-category">Ingresa la información que se te pide</p>
            </div>
            <div class="card-body">
              <form action="{{ route('marcas.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Nombre de la marca</label>
                      <input type="text" class="form-control" name="nombre" id="nombreMarca" value="">
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
                      <th>Nombre de la marca</th>
                      <th>Acciónes</th>
                    </tr>
                  </thead>
                    @foreach ($marca as $ma)
                      <tbody>
                      <tr>
                        <td>{{$ma->id}}</td>
                        <td>{{$ma->nombre}}</td>
                        <td class="td-action text-left btn-group">
                          <button type="button" rel="tooltip" data-toggle="modal" data-target="#marca{{$ma->id}}" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                            <i class="material-icons">edit</i>
                          </button>
                          <form action="{{route('marcas.destroy', $ma->id)}}" method="POST">
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

  @foreach ($marca as $modalMarca)
    <div class="modal fade" id="marca{{$modalMarca->id}}" tabindex="-1" role="dialog" aria-labelledby="marcaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="marcaLabel">Modificar nombre de la marca</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('marcas.update', $modalMarca->id)}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PUT">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Nombre de la marca</label>
                  <input type="text" class="form-control text-info" name="nombre" id="nombreMarca" value="{{ $modalMarca->nombre }}">
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
