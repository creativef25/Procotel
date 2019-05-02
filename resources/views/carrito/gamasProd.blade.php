@extends('carrito')
@section('containerC')
  <section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categorias
						</h4>

						<ul class="p-b-54">
              @foreach ($cate as $catego)
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									{{$catego->nombre}}
								</a>
							</li>
              @endforeach
						</ul>
            <h4 class="m-text14 p-b-7">
              Marcas
            </h4>
            <ul class="p-b-54">
              @foreach ($marca as $mar)
              <li class="p-t-4">
                <span data-id="{{ $mar->id}}"  id="marca" data-gama="{{$gama}}" class="s-text13 active1 marca">{{$mar->nombre}}</span>
              </li>
              @endforeach
            </ul>

					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
          <div class="flex-sb-m flex-m p-b-35">
            <div class="flex-w">
              <div class="rs2-select2 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                <h3>
                @if ($gama == 1)
                  <h3>Gama Alta</h3>
                @elseif ($gama == 2)
                  <h3>Gama Media</h3>

                @else
                  <h3>Gama Baja</h3>
                @endif
                </h3>
              </div>
            </div>
          </div>
					<!-- Product -->
					<div class="row" id="conte">
            @foreach ($produ as $producto)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 entidades" entidad="{{ $producto->id}}" id="primerDiv{{ $producto->id}}">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="{{ !empty($producto->Imagen[0]->id_producto) && !empty($producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$producto->Imagen[0]->path) : ""}}" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
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
          <div class="holder pagination flex-m flex-w p-t-26"></div>
				</div>
			</div>
		</div>
	</section>
@endsection
@push('scriptsC')

  <!--===============================================================================================-->
  	<script type="text/javascript" src="{{ asset('carrito/vendor/select2/select2.min.js')}}"></script>
  	<script type="text/javascript">
  		$(".selection-1").select2({
  			minimumResultsForSearch: 20,
  			dropdownParent: $('#dropDownSelect1')
  		});

  		$(".selection-2").select2({
  			minimumResultsForSearch: 20,
  			dropdownParent: $('#dropDownSelect2')
  		});
  	</script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="{{ asset('carrito/vendor/daterangepicker/moment.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('carrito/vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="{{ asset('carrito/vendor/noui/nouislider.min.js')}}"></script>
  	<script type="text/javascript">
  		/*[ No ui ]
  	    ===========================================================*/
  	    var filterBar = document.getElementById('filter-bar');

  	    noUiSlider.create(filterBar, {
  	        start: [ 50, 200 ],
  	        connect: true,
  	        range: {
  	            'min': 50,
  	            'max': 200
  	        }
  	    });

  	    var skipValues = [
  	    document.getElementById('value-lower'),
  	    document.getElementById('value-upper')
  	    ];

  	    filterBar.noUiSlider.on('update', function( values, handle ) {
  	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
  	    });
  	</script>
    <script src="{{ asset('carrito/js/jPages.js')}}"></script>
    <script type="text/javascript">

    $(function(){

      $('div.holder').jPages({
        containerID: 'conte',
        perPage: 12,
        previous: false,
        next: false
      });

      $('div.holder a').addClass('item-pagination flex-c-m trans-0-4');

    });

    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
    $(".marca").click(function(){
      var id = $(this).data('id');
      $(".entidades").remove();
      var gama = $(this).data('gama');
      axios.post('{{route('busquedaMarcaGama')}}',{
        id:id,
        gama:gama
      }).then(function(response){
        $("#conte").append(response.data);
        $("#conte").css("min-height", "unset");
        if ($.browser.device(
          /android|webos|iphone|ipad|ipod|blackberry|iemobile|operamini/i.test(navigator.userAgent.toLowerCase()))) {
            scroll();
        }
      }).catch(function(error){
        console.log(error);
      });

    });

    function scroll(){
      var posicion = $("#conte").offset().top;
      $("html, body").animate({
        scrollTop: posicion
      }, 2000);
    }

    </script>
  <!--===============================================================================================-->
@endpush
