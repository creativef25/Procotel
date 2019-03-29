@extends('carrito')
@section('containerC')
  <!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<a href="{{ route('tienda')}}">
					<div class="item-slick1 item1-slick1" style="background-image: url(carrito/images/banner0.png);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							</div>
						</div>
					</div>
				</a>

				<a href="{{ route('precios')}}">
					<div class="item-slick1 item2-slick1" style="background-image: url(carrito/images/banner1.png);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							</div>
						</div>
					</div>
				</a>

				<a href="http://payapp.mx/">
					<div class="item-slick1 item3-slick1" style="background-image: url(carrito/images/banner2.png);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							</div>
						</div>
					</div>
				</a>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{ asset('carrito/images/baja.png')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{ route('gamaP', '3')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Gama Baja
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{ asset('carrito/images/media.png')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{ route('gamaP', '2')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Gama Media
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{ asset('carrito/images/alta.png')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{ route('gamaP', '1')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Gama Alta
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="relateproduct bgwhite p-t-45 p-b-5">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">Marcas</h3>
			</div>

			<div class="wrap-slick2">
				<div class="slick2">
					@foreach ($marca as $marcas)
					<div class="item-slick2 p-1-15 p-r-15" id="marcas">
						<a href="{{ route('marcaP', $marcas->id)}}">
							<img width="100%" src="{{ asset('imagenes/' . $marcas->ImageM->path)}}" alt="">
						</a>
					</div>
				@endforeach
				</div>

			</div>

		</div>

	</section>


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<!-- Tab01 -->
			<div class="tab01">
				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							@foreach ($produ as $producto)
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">

									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative">
											{{--@foreach ($producto->Imagen as $value => $imgProdu)--}}
													 <img src="{{ !empty($producto->Imagen[0]->id_producto) && !empty($producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$producto->Imagen[0]->path) : ""}}" alt="IMG-PRODUCT">
											{{--@endforeach--}}
											<div class="block2-overlay trans-0-4">
												<div class="block2-btn-addcart w-size1 trans-0-4">
													<a href="{{ route('carrito-add', $producto->id)}}" role="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Agregar</a>
												</div>
											</div>
										</div>
										<div class="block2-txt p-t-20">
											<a href="{{ route('detalleProd', $producto->id)}}" class="block2-name dis-block s.text3 p-b-5">
												{{ substr($producto->descripcion, 0, 60)."..."}}
											</a>
											<span class="block2-price m-text6 p-r-5">
												${{$producto->precio}}.00
											</span>
										</div>
									</div>
								</div>
							@endforeach

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(carrito/images/payapp.png);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					Ya conoces
				</span>

				<h2 class="l-text1 fs-35-sm">
					PayApp
				</h2>
				<a href="http://payapp.mx/" target="_blank" class="flex-c-m size9 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" tabindex="-1">
								Ingresa
							</a>
			</div>
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Duplica tus ventas
				</h4>

				<a href="#" class="s-text11 t-center">
					RECUERDA CON ESTE SERVICIO MAS GENTE VISITARA TU NEGOCIO POR LO QUE ES UNA EXCELENTE OPCIÓN PARA INCREMENTAR TU GANANCIAS.
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Afíliate sin tramites
				</h4>

				<span class="s-text11 t-center">
					SIN CONTRATOS, SIN PLAZOS FORZOSOS O MÍNIMOS DE COMPRA, CON NOSOTROS SOLO ADQUIERES LO QUE NECESITAS CUANDO LO NECESITAS.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15  respon1">
				<h4 class="m-text12 t-center">
					Fácil y sencillo
				</h4>

				<span class="s-text11 t-center">
					SOLO NECESITAS TENER WHATSAPP O TELEGRAM PARA AFILIARTE CON NOSOTROS, ADEMAS CONTARAS CON ATENCIÓN Y SOPORTE EN TODO MOMENTO
				</span>
			</div>

		</div>
	</section>

@endsection
@push('scriptsC')
	<script type="text/javascript">
	$(document).ready(function(){
		$(".slick-cloned").attr('id', 'marcas')
	});

	</script>

@endpush
