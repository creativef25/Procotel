@extends('carrito')
@section('containerC')

  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(carrito/images/heading-pages-06.jpg);">
    <h2 class="l-text2 t-center">
      Mis Pedidos
    </h2>
  </section>

  <section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
      <div class="container-table-cart pos-relative">
        <div class="wrap-table-shopping-cart bgwhite">
          <table class="table-shopping-cart">
            <tr class="table-head">
              <th>N° de Pedido</th>
              <th>Productos</th>
              <th>Cantidad</th>
              <th>Precio x unidad</th>
              <th>Total x producto</th>
              <th>Total de la compra</th>
              <th>Pago</th>
              <th>Fecha del Pedido</th>
              <th>Entregado</th>
            </tr>
            <tr>
              @foreach ($pedido as $pedidos)
                <th class="text-center">{{ $pedidos->id}}</th>
                <th>
                  @foreach ($pedidos->producto as $nomProd)
                    <span>{{ $nomProd->nombre}} {{$nomProd->modelo}}</span><br>
                  @endforeach
                </th>
                <th class="text-center">
                  @foreach ($pedidos->producto as $canProd)
                    <span>{{ $canProd->pivot->cantidad}}</span><br>
                  @endforeach
                </th>
                <th>
                  @foreach ($pedidos->producto as $preProd)
                    <span>$ {{ $preProd->precio}}.00</span><br>
                  @endforeach
                </th>
                <th>
                  @foreach ($pedidos->producto as $totalProd)
                    <span>$ {{ $totalProd->pivot->total}}.00</span><br>
                  @endforeach
                </th>
                <th>
                  $ {{ $pedidos->total}}.00
                </th>
                <th>
                  {{ !empty($pedidos->status) ? "Aprobado" : "Requiere Pago"}}
                </th>
                <th>
                  {{ date($pedidos->created_at)}}
                </th>
                <th>
                  <span>En proceso</span>
                </th>

              @endforeach
            </tr>
          </table>

        </div>

      </div>

    </div>

  </section>

@endsection
