@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Promociones</a>
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
              <h2 class="card-title">Promociones</h2>
              <p class="card-category">Ingresa la información que se te pide</p>
            </div>
            <div class="card-body">
              <form action="{{ route('promociones.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label for="marcaEquipo">Producto</label>
                      <select class="form-control" id="productoId" name="id_producto">
                        @foreach ($producto as $produ)
                          <option class="text-success" value="{{ $produ->id}}">{{ $produ->nombre}} {{$produ->modelo}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label class="bmd-label-floating">Precio</label>
                    <div class="form-group bmd-form-group">
                      <input type="text" class="form-control" name="precio" id="precio" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Precio a 18 meses</label>
                      <input type="text" class="form-control" name="precio1" id="precio1" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Precio a 24 meses</label>
                      <input type="text" class="form-control" name="precio2" id="precio2" value="">
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
                      <th>Producto</th>
                      <th>Precio</th>
                      <th>18 Meses</th>
                      <th>24 Meses</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  @foreach ($promo as $promocion)
                    <tbody>
                      <tr>
                        <td>{{ $promocion->id}}</td>
                        <td>{{ $promocion->producto->nombre . " " . $promocion->producto->modelo}}</td>
                        <td>$ {{ $promocion->precio}}.00</td>
                        <td>$ {{ $promocion->precio1}}.00</td>
                        <td>$ {{ $promocion->precio2}}.00</td>
                        <td class="td-action text-left btn-group">
                          <button type="button" rel="tooltip" data-toggle="modal" data-target="#promocion{{$promocion->id}}" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                            <i class="material-icons">edit</i>
                          </button>
                          <form action="{{route('promociones.destroy', $promocion->id)}}" method="POST">
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

  @foreach ($promo as $promoci)
    <div class="modal fade" id="promocion{{$promoci->id}}" tabindex="-1" role="dialog" aria-labelledby="promocionLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modificar promoción</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('promociones.update', $promoci->id)}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PATCH">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label for="marcaEquipo">Producto</label>
                  <select class="form-control text-success" name="id_producto">
                    @foreach ($producto as $produ)
                      <option class="text-success" value="{{ $produ->id}}">{{ $produ->nombre}} {{$produ->modelo}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Precio</label>
                  <input type="text" class="form-control text-success" name="precio" id="memoriaProducto" value="{{ $promoci->precio}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">18 meses</label>
                  <input type="text" class="form-control text-success" name="precio1" id="memoriaProducto" value="{{ $promoci->precio1}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">24 meses</label>
                  <input type="text" class="form-control text-success" name="precio2" id="memoriaProducto" value="{{ $promoci->precio2}}">
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
@push('scripts')
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      $("#productoId").on('change', function(){
        var id = $(this).val();

        axios.post('promo/precio',{
          id:id
        }).then(function(response){
          $("#precio").val(response.data.precio);
          //console.log(response.data.precio);
        }).catch(function(error){
          console.log(error);
        });

      });
    });

  </script>

@endpush
