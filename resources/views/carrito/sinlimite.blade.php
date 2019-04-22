@extends('carrito')
@section('containerC')
  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('carrito/images/sin-limite-2019-v1-bne.jpg')}}" alt="First slide">
        </div>
      </div>
    </div>
  </section>

  <section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
      <div class="container-table-cart pos-relative">
        <div class="wrap-table-shopping-cart bgwhite">
          <table class="table-shopping-cart">
            <tr class="table-head">
              <th class="text-center">Telcel Max Sin Límite</th>
              <th class="text-center">Minutos</th>
              <th class="text-center">Mensajes</th>
              <th class="text-center">Internet</th>
              <th class="text-center">Redes Sociales</th>
              <th class="text-center">Mensualidad</th>
            </tr>
            <tr class="tabla-orange text-white">
              <th class="text-center">1000</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                1000 MB <br>
                + 1000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 229.00</th>
            </tr>
            <tr>
              <th class="text-center">1500 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                1500 MB <br>
                + 1500 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 269.00</th>
            </tr>
            <tr class="tabla-orange text-white">
              <th class="text-center">2000</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                2000 MB <br>
                + 2000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 299.00</th>
            </tr>
            <tr>
              <th class="text-center">3000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                3000 MB <br>
                + 3000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 399.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr  class="tabla-orange text-white">
              <th class="text-center">5000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                5000 MB <br>
                + 5000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 499.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr>
              <th class="text-center">6000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                7000 MB <br>
                + 7000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 599.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr  class="tabla-orange text-white">
              <th class="text-center">6500 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                8000 MB <br>
                + 8000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 699.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr>
              <th class="text-center">7000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                10000 MB <br>
                + 10000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 799.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr  class="tabla-orange text-white">
              <th class="text-center">8000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                11000 MB <br>
                + 11000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 899.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr>
              <th class="text-center">9000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                13000 MB <br>
                + 13000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 999.00 <br>
                Incluye Claro Video
              </th>
            </tr>
            <tr  class="tabla-orange text-white">
              <th class="text-center">12000 </th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">Ilimitados</th>
              <th class="text-center">
                15000 MB <br>
                + 15000 MB X Promoción
              </th>
              <th class="text-center">
                Ilimitado por promoción<br>
                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
              </th>
              <th class="text-center">$ 1,299.00 <br>
                Incluye Claro Video
              </th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Existe un Plan diseñado para ti.</h1><br>
          <span>Descubre la amplia gama de Planes Telcel y encuentra los beneficios que cubren tus necesidades a precios sorprendentes.</span><br>
          <a href="{{ route('planSinLimite')}}" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Ir a planes</a>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('carrito/images/plan-disenado-para-ti.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
