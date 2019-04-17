@extends('carrito')
@section('containerC')
  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('carrito/images/ntc-10-empresas-bne.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('carrito/images/galaxy-view-empresas-bne.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('carrito/images/rauter-alcate-empresas-bne.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('carrito/images/Empresarial_Escritorio_modems-bne.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('carrito/images/localizacion-vehicular-bne.jpg')}}" alt="First slide">
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-45 p-b-58">
		<div class="container">
      <div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					{{ $titulo}}
				</h3>
			</div>
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
											</div>
										</div>
										<div class="block2-txt p-t-20">
											<span class="block2-price m-text6 p-r-5">
												{{$producto->nombre." ".$producto->modelo}}
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


@endsection
