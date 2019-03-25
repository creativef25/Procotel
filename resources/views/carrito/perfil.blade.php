@extends('carrito')
@push('HeadC')
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
  <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
  <script type="text/javascript">
          $(document).ready(function() {

              OpenPay.setId('m5hpvqspwexkntjy2ozl');
              OpenPay.setApiKey('pk_84c1034542ac4ac5ba6d9b25d8866a79');
              OpenPay.setSandboxMode(true);
              //Se genera el id de dispositivo
              var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");

              $('#pay-button').on('click', function(event) {
                  event.preventDefault();
                  $("#pay-button").prop( "disabled", true);
                  OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
              });

              var sucess_callbak = function(response) {
                var token_id = response.data.id;
                $('#token_id').val(token_id);
                $('#payment-form').submit();
              };

              var error_callbak = function(response) {
                  var desc = response.data.description != undefined ? response.data.description : response.message;
                  alert("ERROR [" + response.status + "] " + desc);
                  $("#pay-button").prop("disabled", false);
              };

              var nombre = $("#nombre").val();
              var ape1 = $("#ap1").val();
              var ape2 = $("#ape2").val();
              var telefono = $("#tel").val();

              if (nombre != "" && ape1 != "" && ape2 != "" && telefono != "") {
                $("#formulario1").css('display', 'none');
              }



          });
      </script>
@endpush
@section('containerC')
  <!-- Title Page -->
  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(carrito/images/heading-pages-06.jpg);">
    <h2 class="l-text2 t-center">
      Perfil
    </h2>
  </section>

  <section class="bgwhite p-t-66 p-b-60">
    <div class="container">
    @if(Session::has('error'))
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          {{Session::get('error')}}
        </div>
      @elseif (Session::has('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          {{Session::get('success')}}
        </div>
      @endif
			<div class="row">
				<div class="col-md-3 p-b-30">
          <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">

					<form class="leave-comment" method="post" action="{{ route('addDatos')}}">
            {{ csrf_field() }}
						<h4 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 show-dropdown-content">
							Datos Personales
              <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
              <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
						</h4>
            <div class="dropdown-content dis-none p-t-15 p-b-23" id="formulario1">


            <div class="row">
              <label>Nombre</label>
  						<div class="bo4 of-hidden size15 m-b-20">
  							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nombre" id="nombre" value="{{ empty($dato->nombre) ? Auth::user()->name : $dato->nombre}}" placeholder="Nombre">
  						</div>
            </div>

            <div class="row">
              <label>Apellido Paterno</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ape_Paterno" id="ape1" value="{{ !empty($dato->ape_Paterno) ? $dato->ape_Paterno : ""}}" placeholder="Apellido Paterno">
              </div>
            </div>

						<div class="row">
              <label>Apellido Materno</label>
              <div class="bo4 of-hidden size15 m-b-20">
  							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ape_Materno" id="ape2" value="{{ !empty($dato->ape_Materno) ? $dato->ape_Materno : ""}}" placeholder="Apellido Materno">
  						</div>
            </div>

            <div class="row">
              <label>Telefono</label>
              <div class="bo4 of-hidden size15 m-b-20">
  							<input class="sizefull s-text7 p-l-22 p-r-22" type="tel" name="telefono" id="tel" value="{{ !empty($dato->telefono) ? $dato->telefono : ""}}" placeholder="Telefono">
  						</div>
            </div>

            <div class="row">
              <label>Edad</label>
              <div class="bo4 of-hidden size9 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="edad" value="{{ !empty($dato->edad) ? $dato->edad : ""}}" placeholder="Edad">
              </div>
              <label>Codigo Postal</label>
              <div class="bo4 of-hidden size9 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="codigoPostal" value="{{ !empty($dato->codigoPostal) ? $dato->codigoPostal : ""}}" placeholder="Codigo Postal">
              </div>
            </div>

            <div class="row">
              <label>Ciudad</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ciudad" value="{{ !empty($dato->ciudad) ? $dato->ciudad : ""}}" placeholder="Ciudad">
              </div>
            </div>

            <div class="row">
              <label>Alcaldia</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="alcaldia" value="{{ !empty($dato->alcaldia) ? $dato->alcaldia : ""}}" placeholder="Delegacion o Alcaldia">
              </div>
            </div>

            <div class="row">
              <label>Colonia</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="colonia" value="{{ !empty($dato->colonia) ? $dato->colonia : ""}}" placeholder="Colonia">
              </div>
            </div>

            <div class="row">
              <label>Calle</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="calle" value="{{ !empty($dato->calle) ? $dato->calle : ""}}" placeholder="Calle y Numero">
              </div>
            </div>
						<div class="w-size25">
							<!-- Button -->
							<button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Guardar
							</button>
						</div>
          </div>
					</form>
        </div>
        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
          <h4 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 show-dropdown-content">
            Tarjeta de crédito o débito
            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
          </h4>
          <div class="dropdown-content dis-none p-t-15 p-b-23">
            <form action="{{ route('pagoT')}}" method="post" id="payment-form">
              {{ csrf_field() }}
              <input type="hidden" name="token_id" id="token_id">
              <label>Nombre del titular</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" class="sizefull s-text7 p-l-22 p-r-22" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
              </div>
              <label>Número de tarjeta</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" class="sizefull s-text7 p-l-22 p-r-22" autocomplete="off" data-openpay-card="card_number">
              </div>
              <label>Fecha de expiración</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" class="sizefull s-text7 p-l-22 p-r-22" placeholder="Mes" data-openpay-card="expiration_month">
              </div>
              <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" class="sizefull s-text7 p-l-22 p-r-22" placeholder="Año" data-openpay-card="expiration_year">
              </div>
              <label>Código de seguridad</label>
              <div class="bo4 of-hidden size15 m-b-20">
                <input type="text" class="sizefull s-text7 p-l-22 p-r-22" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2">
              </div>
              <div class="w-size25">
                <img src="{{ asset('carrito/images/bancos.png')}}" alt="" style="padding-left: 15%;">
                <a href="#" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" id="pay-button">Pagar</a>
              </div>
            </form>
          </div>
        </div>
        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
          <h4 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 show-dropdown-content">
            Pago por PayPal
            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
          </h4>
          <div class="dropdown-content dis-none p-t-15 p-b-23">
            <form action="{{ route('getCheckout')}}" method="post">
              {{ csrf_field() }}
              <button type="submit" class="flex-c-m size2 bo-rad-23 hov1 m-text3 trans-0-4" name="button" style="background-color: #0070ba;">Pagar</button>
            </form>
          </div>
        </div>
        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
          <h4 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4 show-dropdown-content">
            Pedidos
            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
          </h4>
          <div class="dropdown-content dis-none p-t-15 p-b-23">
            <a href="{{ route('pedido')}}">Ver pedidos</a>

          </div>

        </div>
				</div>
        <div class="col-md-9 p-b-30">
          <div class="container-table-cart pos-relative">
    				<div class="wrap-table-shopping-cart bgwhite">
    					<table class="table-shopping-cart">
    						<tr class="table-head">
    							<th class="column-1"></th>
    							<th class="column-1">Producto</th>
    							<th class="column-1">Precio</th>
    							<th class="column-1">Cantidad</th>
    							<th class="column-1">Total</th>
    						</tr>
                @if (empty($carrito))
                  @else
                @foreach ($carrito as $item)
    						<tr class="table-row">
    							<td class="column-1">
                      <a href="{{ route('carrito-delete', $item->id)}}">
                        <div class="cart-img-product b-rad-4 o-f-hidden">
                        <img src="{{ asset('imagenes/'.$item->Imagen[0]->path)}}" alt="IMG-PRODUCT">
                      </div>
                      </a>
    							</td>
    							<td class="column-1">{{ $item->nombre }} {{ $item->modelo}}</td>
    							<td class="column-1">${{ $item->precio}}.00</td>
    							<td class="column-1">
                    {{ $item->quantity}}
    							</td>
    							<td class="column-1">${{ $item->precio * $item->quantity}}.00</td>
    						</tr>
              @endforeach
            @endif
    					</table>
    				</div>
    			</div>
          <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$ {{$total}}.00
					</span>
				</div>
			</div>

        </div>
			</div>
		</div>
	</section>

@endsection
