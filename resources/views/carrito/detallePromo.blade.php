@extends('carrito')
@section('containerC')

  <div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
            @foreach ($produ->Imagen as $imagenesProdu)
              <div class="item-slick3" data-thumb="{{ asset('imagenes/'.$imagenesProdu->path)}}">
  							<div class="wrap-pic-w">
  								<img src="{{ asset('imagenes/'.$imagenesProdu->path)}}" alt="IMG-PRODUCT">
  							</div>
  						</div>
            @endforeach
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13" id="tituloP">
					{{$produ->nombre}} {{$produ->modelo}}
				</h4>

				<span class="m-text17">
					$ {{$produ->precio}}.00
				</span>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
                <a href="https://api.whatsapp.com/send?phone=5215567644021&text=Requiero%20informacion%20sobre%20uno%20de%20sus%20productos%20" role="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Contratar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Modelo: {{$produ->modelo}}</span>
					<span class="s-text8 m-r-35">Categoria: {{ $produ->Categ->nombre}}</span>
          @if ($produ->nombre == "Iphone")
            <span class="s-text8"><i class="fa fa-apple"></i>IOS: {{ $produ->android}}</span>
          @else
            <span class="s-text8"><i class="fa fa-android"></i>Android: {{ $produ->android}}</span>
          @endif
				</div>

				<!--  -->
        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Caracteristicas
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<div class="row">
              <div class="col-lg-4">
                <i class="fa fa-microchip fa-3x"></i> <p>Procesador:<br>{{ $produ->procesador}} </p>
              </div>
              <div class="col-lg-4">
                <i class="fa fa-camera fa-3x"></i><p>Camara:<br> {{ $produ->camara}}</p>
              </div>
              <div class="col-lg-4">
                <i class="fa fa-mobile fa-3x"></i><p>Pantalla:<br>{{ $produ->pantalla}} </p>
              </div>
              <div class="col-lg-4">
                <i class="fa fa-database fa-3x"></i><p>Capacidad:<br>{{ $produ->capacidad}} </p>
              </div>
              <div class="col-lg-4">
                <i class="fa fa-wrench fa-3x"></i><p>Memoria:<br>{{ $produ->memoria}} </p>
              </div>
            </div>
					</div>
				</div>
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Descripción
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							{{ $produ->descripcion}}
						</p>
					</div>
				</div>
        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Compartir
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
            <a id="compFace" class="topbar-social-item fa fa-facebook"></a>
            <a id="comptwitter" class="topbar-social-item fa fa-twitter"></a>
            <a role="button" data-toggle="modal" data-target="#modal" class="topbar-social-item fa fa-whatsapp"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="whatsappModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="whatsappModalLabel">Compartir por Whatsapp</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <div class="">
              <label for="">Ingrese el número de teléfono al que enviara la información</label>
              <input id="numero" type="tel" class="sizefull s-text7 p-l-22 p-r-22" placeholder="Ingrese numero de celular" value="">
            </div><br>

            <a href="javascript:void(0);" onclick="whatsapp()" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">Enviar</a>

          </div>

        </div>

      </div>

    </div>

  </div>

@endsection

@push('scriptsC')
  <script type="text/javascript">
  $(document).ready(function(){
    var pagina = window.location.href;
    var titulo = $('#tituloP').text();
    var face = 'http://www.facebook.com/sharer.php?u='+pagina+'&t='+titulo;
    var twit = 'http://twitter.com/?status='+titulo+'%20'+pagina+'';
    $('#compFace').attr('href', face);
    $('#comptwitter').attr('href', twit);

  });

  function whatsapp(){
    var number = $("#numero").val();
    var texto = "Este equipo es para ti {{$produ->nombre}} {{$produ->modelo}}"
    var url = "https://api.whatsapp.com/send?phone=521"+number+"&text="+texto+" "+ window.location;
    window.location.href = url;
  }

  </script>

@endpush
