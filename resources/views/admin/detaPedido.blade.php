@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Datos Generales de Pedidos</a>
  </div>
@endpush

@section('container')
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title">Datos del Comprador</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Telefono</th>
                <th>Edad</th>
                <th>Calle</th>
                <th>Ciudad</th>
                <th>Colonia</th>
                <th>Alcaldia</th>
                <th>Codigo Postal</th>
              </tr>
            </thead>
            @foreach ($pedido as $pedidos)
              <tbody>
                <tr>
                  <th>{{ $pedidos->usuario->id}}</th>
                  <th>{{ $pedidos->usuario->nombre}}</th>
                  <th>{{ $pedidos->usuario->ape_Paterno}}</th>
                  <th>{{ $pedidos->usuario->ape_Materno}}</th>
                  <th>{{ $pedidos->usuario->telefono}}</th>
                  <th>{{ $pedidos->usuario->edad}}</th>
                  <th>{{ $pedidos->usuario->calle}}</th>
                  <th>{{ $pedidos->usuario->ciudad}}</th>
                  <th>{{ $pedidos->usuario->colonia}}</th>
                  <th>{{ $pedidos->usuario->alcaldia}}</th>
                  <th>{{ $pedidos->usuario->codigoPostal}}</th>
                </tr>
              </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title">Productos a entregar</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cantidad</th>
              </tr>
            </thead>
            @foreach ($pedido as $producto)
              <tbody>
                @foreach ($producto->producto as $pro)
                  <tr>
                    <th>{{ $pro->id}}</th>
                    <th>{{ $pro->nombre }} {{ $pro->modelo}}</th>
                    <th>{{ $pro->pivot->cantidad}}</th>
                  </tr>
                @endforeach
              </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  <a href="{{ route('entrega', $pedidos->id)}}" class="btn" role="button">Pedido Entregado</a>
</div>

@endsection
