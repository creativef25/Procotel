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
              <th>Total</th>
              <th>Pago</th>
              <th>Entregado</th>
            </tr>

          </table>

        </div>

      </div>

    </div>

  </section>

@endsection
