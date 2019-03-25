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
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
                <a href="{{ route('carrito-add', $produ->id)}}" role="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Agregar</a>
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
            <a id="compFace" class="topbar-social-item fa fa-facebook">
            </a>
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
    $('#compFace').attr('href', face);
  });

  </script>

@endpush
