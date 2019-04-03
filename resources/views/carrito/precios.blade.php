@extends('carrito')
@push('HeadC')
  <link rel="stylesheet" href="{{ asset('carrito/css/precios.css')}}">
@endpush
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
          Iphone
        </h3>
      </div>

      <!-- Slide2 -->
      <div class="wrap-slick2">
        <div class="slick2">

          <div class="item-slick2 p-l-15 p-r-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                <img src="images/item-07.jpg" alt="IMG-PRODUCT">

                <div class="block2-overlay trans-0-4">
                  <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                  </a>

                  <div class="block2-btn-addcart w-size1 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                      Add to Cart
                    </button>
                  </div>
                </div>
              </div>

              <div class="block2-txt p-t-20">
                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                  Frayed denim shorts
                </a>

                <span class="block2-oldprice m-text7 p-r-5">
                  $29.50
                </span>

                <span class="block2-newprice m-text8 p-r-5">
                  $15.90
                </span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
@endsection
