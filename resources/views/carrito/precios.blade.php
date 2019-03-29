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

  <div id="generic_price_table">
  <section>
    <div class="container">

      <!--BLOCK ROW START-->
      <div class="row">
        <div class="col-md-4">

          <!--PRICE CONTENT START-->
          <div class="generic_content clearfix">

            <!--HEAD PRICE DETAIL START-->
            <div class="generic_head_price clearfix">

              <!--HEAD CONTENT START-->
              <div class="generic_head_content clearfix">

                <!--HEAD START-->
                <div class="head_bg"></div>
                <div class="head">
                  <span>Telcel 40</span>
                </div>
                <!--//HEAD END-->

              </div>
              <!--//HEAD CONTENT END-->

              <!--PRICE START-->
              <div class="generic_price_tag clearfix">
                <span class="price">
                  <span class="sign">$</span>
                  <span class="currency">199</span>
                  <span class="cent">.00</span>
                  <span class="month">/Mensual</span>
                </span>
              </div>
              <!--//PRICE END-->

            </div>
            <!--//HEAD PRICE DETAIL END-->

            <!--FEATURE LIST START-->
            <div class="generic_feature_list">
              <ul>
                <li><span>40</span> Minutos Indistintos</li>
                <li><span>200</span> Minutos Telcel-Telcel</li>
                <li><span>200</span> MB</li>
                <li><span>1.98</span> Minuto Adicional</li>
              </ul>
            </div>
            <!--//FEATURE LIST END-->

            <!--BUTTON START-->
            <div class="generic_price_btn clearfix">
              <a class="" href="https://api.whatsapp.com/send?phone=573014080340&text=Hola%2C%20deseo%20adquirir%20un%20plan%20con%20ustedes" target="_blank">Contratar</a>
            </div>
            <!--//BUTTON END-->

          </div>
          <!--//PRICE CONTENT END-->

        </div>

        <div class="col-md-4">

          <!--PRICE CONTENT START-->
          <div class="generic_content active clearfix">

            <!--HEAD PRICE DETAIL START-->
            <div class="generic_head_price clearfix">

              <!--HEAD CONTENT START-->
              <div class="generic_head_content clearfix">

                <!--HEAD START-->
                <div class="head_bg"></div>
                <div class="head">
                  <span>TELCEL 700</span>
                </div>
                <!--//HEAD END-->

              </div>
              <!--//HEAD CONTENT END-->

              <!--PRICE START-->
              <div class="generic_price_tag clearfix">
                <span class="price">
                  <span class="sign">$</span>
                  <span class="currency">699</span>
                  <span class="cent">.00</span>
                  <span class="month">/Mensual</span>
                </span>
              </div>
              <!--//PRICE END-->

            </div>
            <!--//HEAD PRICE DETAIL END-->

            <!--FEATURE LIST START-->
            <div class="generic_feature_list">
              <ul>
                <li><span>700</span> Minutos Indistintos</li>
                <li><span>300</span> Minutos Telcel-Telcel</li>
                <li><span>3</span> Números Gratis</li>
                <li><span>150</span> Mensajes de Texto</li>
                <li><span>600</span> MB</li>
              </ul>
            </div>
            <!--//FEATURE LIST END-->

            <!--BUTTON START-->
            <div class="generic_price_btn clearfix">
              <a class="" href="https://api.whatsapp.com/send?phone=573014080340&text=Hola%2C%20deseo%20adquirir%20un%20plan%20con%20ustedes" target="_blank">Contratar</a>
            </div>
            <!--//BUTTON END-->

          </div>
          <!--//PRICE CONTENT END-->

        </div>
        <div class="col-md-4">

          <!--PRICE CONTENT START-->
          <div class="generic_content clearfix">

            <!--HEAD PRICE DETAIL START-->
            <div class="generic_head_price clearfix">

              <!--HEAD CONTENT START-->
              <div class="generic_head_content clearfix">

                <!--HEAD START-->
                <div class="head_bg"></div>
                <div class="head">
                  <span>TELCEL 375</span>
                </div>
                <!--//HEAD END-->

              </div>
              <!--//HEAD CONTENT END-->

              <!--PRICE START-->
              <div class="generic_price_tag clearfix">
                <span class="price">
                  <span class="sign">$</span>
                  <span class="currency">399</span>
                  <span class="cent">.00</span>
                  <span class="month">/Mensual</span>
                </span>
              </div>
              <!--//PRICE END-->

            </div>
            <!--//HEAD PRICE DETAIL END-->

            <!--FEATURE LIST START-->
            <div class="generic_feature_list">
              <ul>
                <li><span>375</span> Minutos Indistintos</li>
                <li><span>175</span> Minutos Telcel-Telcel</li>
                <li><span>2</span> Números Gratis</li>
                <li><span>85</span> Mensajes de Texto</li>
                <li><span>450</span> MB</li>
              </ul>
            </div>
            <!--//FEATURE LIST END-->

            <!--BUTTON START-->
            <div class="generic_price_btn clearfix">
              <a class="" href="https://api.whatsapp.com/send?phone=573014080340&text=Hola%2C%20deseo%20adquirir%20un%20plan%20con%20ustedes" target="_blank">Contratar</a>
            </div>
            <!--//BUTTON END-->
          </div>
          <!--//PRICE CONTENT END-->
        </div>
      </div>
      <!--//BLOCK ROW END-->
    </div>
  </section>

@endsection
