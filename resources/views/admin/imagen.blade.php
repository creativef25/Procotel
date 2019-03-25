@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Imagenes</a>
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
              <h2 class="card-title">Imagenes</h2>
              <p class="card-category">Ingresa la información que se te pide</p>
            </div>
            <div class="card-body">
              <form action="{{ route('imagen.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class=" bmd-form-group">
                      <label class="bmd-label-floating">Selecciones Imagen</label><br>
                      <input type="file" class="form-control" name="path" id="path" value="">
                    </div>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="producto" value="Producto"> Producto
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="marca" value="Marca"> Marca
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="imgPrincipal" id="imgPrincipal" value="1"> Imagen Principal
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12" hidden id="tablaMarca">
                    <div class="card">
                      <div class="card-header card-header-warning">
                        <h2 class="card-title text-white">Marcas registradas</h2>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead class="text-primary">
                              <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Selección</th>
                              </tr>
                            </thead>
                            @foreach ($marca as $marcas)
                                <tbody>
                                <tr>
                                  <td>{{ $marcas->id}}</td>
                                  <td>{{ $marcas->nombre}}</td>
                                  <td>
                                    <div class="form-check form-check-radio form-check-inline">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="id_marca" value="{{$marcas->id}}">
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12" hidden id="tablaProd">
                    <div class="card">
                      <div class="card-header card-header-success">
                        <h2 class="card-title text-white">Productos registrados</h2>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead class="text-primary">
                              <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Modelo</th>
                                <th>Selección</th>
                              </tr>
                            </thead>
                            @foreach ($produ as $producto)
                                <tbody>
                                <tr>
                                  <td>{{ $producto->id}}</td>
                                  <td>{{ $producto->nombre}}</td>
                                  <td>{{ $producto->modelo}}</td>
                                  <td>
                                    <div class="form-check form-check-radio form-check-inline">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="id_producto" value="{{$producto->id}}">
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
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
                      <th>Tipo de imagen</th>
                      <th>Imagen</th>
                      <th>Acciónes</th>
                    </tr>
                  </thead>
                    @foreach ($img as $imag)
                      <tbody>
                      <tr>
                        <td>{{$imag->id}}</td>
                        <td>{{$imag->path}}</td>
                        <td>{{empty($imag->id_producto) ? 'Marca' : 'Producto'}}</td>
                        <td>
                          <img src="{{ asset('imagenes/'."$imag->path")}}" width="20%" alt="">
                        </td>
                        <td class="td-action text-left btn-group">
                          {{--<button type="button" rel="tooltip" data-toggle="modal" data-target="#img{{$imag->id}}" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                            <i class="material-icons">edit</i>
                          </button>--}}
                          <form action="{{route('imagen.destroy', $imag->id)}}" method="POST">
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
@endsection

@push('scripts')
  <script type="text/javascript">

  $('#producto').click(function(){
    $('#tablaProd').removeAttr('hidden');
    $('#tablaMarca').attr("hidden", "hidden");
  });

  $('#marca').click(function(){
    $('#tablaMarca').removeAttr('hidden');
    $('#tablaProd').attr('hidden', "hidden");
  });


  </script>

@endpush
