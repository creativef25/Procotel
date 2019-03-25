@extends('carrito')
@section('containerC')

  <section class="cart bgwhite p-t-70 p-b-100">
    @if (count($carrito)>0)
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Producto</th>
							<th class="column-3">Precio</th>
							<th class="column-3">Cantidad</th>
              <th class="column-3">Actualizar</th>
							<th class="column-2">Total</th>
						</tr>
            @foreach ($carrito as $item)
						<tr class="table-row">
							<td class="column-1">
                  <a href="{{ route('carrito-delete', $item->id)}}">
                    <div class="cart-img-product b-rad-4 o-f-hidden">
                    <img src="{{ asset('imagenes/'.$item->Imagen[0]->path)}}" alt="IMG-PRODUCT">
                  </div>
                  </a>
							</td>
							<td class="column-2">{{ $item->nombre }} {{ $item->modelo}}</td>
							<td class="column-3">${{ $item->precio}}.00</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="cantidad" id="product_{{$item->id}}" value="{{ $item->quantity}}">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
              <td class="column-5">
                <a href="#" class="btn-update-item" data-href="{{ route('carrito-update', $item->id) }}" data-id="{{ $item->id}}"><i class="fa fa-refresh"></i> </a>
              </td>
							<td class="column-6">${{ $item->precio * $item->quantity}}.00</td>
						</tr>
          @endforeach
					</table>
				</div>
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<div class="size15 trans-0-4">
					<!-- Button -->
          @if (Auth::check())
            <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="{{ route('perfil')}}">Finalizar pedido</a>
          @else
            <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="{{ route('register')}}">Finalizar pedido</a>
          @endif
				</div>
			</div>
		</div>
    @else
      <div class="container">
        <h1 class="text-center">Tu carrito esta vacio!</h1>
      </div>
    @endif
	</section>
@endsection

@push('scriptsC')
  <script type="text/javascript">
  $(document).ready(function(){

    $('.btn-update-item').on('click', function(e){
      e.preventDefault();

      var id = $(this).data('id');
      var href = $(this).data('href');
      var cantidad = $('#product_' + id).val();

      window.location.href = href + "/" + cantidad;

    });

  });

  </script>

@endpush
