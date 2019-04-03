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
                      <select class="form-control" id="productoId" name="id_marca">
                        @foreach ($producto as $produ)
                          <option class="text-success" value="{{ $produ->id}}">{{ $produ->nombre}} {{$produ->modelo}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Precio</label>
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
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      $("#productoId").on('change', function(){
        axios.get()
      });
    });

  </script>

@endpush
