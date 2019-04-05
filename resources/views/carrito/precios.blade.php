@extends('carrito')
@section('containerC')

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(carrito/images/contrato.png);">
  <h2 class="l-text2 t-center">
    Renovaciones
  </h2>
</section>

<section class="newproduct bgwhite p-t-45 p-b-105">
  <div class="container">

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Alcatel
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 1)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @else

        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Iphone
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 2)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">
            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        BlackBerry
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 3)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">
            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Doppio
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 4)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Hisense
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 5)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Huawei
      </h3>
    </div>

    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 6)
        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        LG
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 7)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Lanix
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 8)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        M4
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 9)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Motorola
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 10)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Nyx
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 11)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Nokia
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 12)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Polaroid
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 13)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Hydrogen
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 14)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Senwa
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 15)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">
            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Samsung
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 16)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
      Sony
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 17)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        xaomi
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 18)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        zte
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
        @foreach ($promo as $promocion)
        @if ($promocion->producto->id_marca === 19)

        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
              <img src="{{ !empty($promocion->producto->Imagen[0]->id_producto) && !empty($promocion->producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$promocion->producto->Imagen[0]->path) : "" }}" alt="IMG-PRODUCT">

            </div>

            <div class="block2-txt p-t-20">
              <a href="{{ route('detallePromo', $promocion->producto->id)}}" class="block2-name dis-block s-text3 p-b-5">
                {{ substr($promocion->producto->descripcion, 0, 60)."..."}}
              </a>

              <span class="block2-newprice m-text8 p-r-5">
                Precio ${{ $promocion->precio}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                18 Meses ${{ $promocion->precio1}}.00
              </span><br>

              <span class="block2-newprice m-text8 p-r-5">
                24 Meses ${{ $promocion->precio2}}.00
              </span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>

  </div>
</section>
@endsection
