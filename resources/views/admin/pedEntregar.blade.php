@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Pedidos por Entregar</a>
  </div>
@endpush

@section('container')

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
                  <th>N° de pedido</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Pago</th>
                  <th>Total</th>
                  <th>Entrega</th>
                  <th>Fecha de creacion</th>
                  <th>Ver más</th>
                </tr>
              </thead>
              @foreach ($pedidos as $pedido)
                <tbody>
                  <tr>
                    <th>{{ $pedido->id}}</th>
                    <th>{{ $pedido->usuario->nombre}}</th>
                    <th>{{ $pedido->usuario->ape_Paterno}}</th>
                    <th>{{ $pedido->usuario->ape_Materno}}</th>
                    <th>{{ !empty($pedido->status) ? "Aprobado": "Requiere pago"}}</th>
                    <th>$ {{ $pedido->total}}.00</th>
                    <th>{{ !empty($pedido->entrega) ? "Entregado" : "Falta Entregar"}}</th>
                    <th>{{ date($pedido->created_at)}}</th>
                    <th class="text-center">
                      <a href="{{ route('DetallePed', $pedido->id)}}">
                        <i class="fa fa-eye"></i>
                      </a>
                    </th>
                  </tr>
                </tbody>

              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
