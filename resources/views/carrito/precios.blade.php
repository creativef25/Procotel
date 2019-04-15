@extends('carrito')
@section('containerC')

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('carrito/images/empesarial1.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('carrito/images/empesarial2.png')}}" alt="Second slide">
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
            <th class="text-center">Telcel Max Sin Límite Empresarial</th>
            <th class="text-center">Minutos</th>
            <th class="text-center">Mensajes</th>
            <th class="text-center">Internet</th>
            <th class="text-center">Redes Sociales</th>
            <th class="text-center">Mensualidad</th>
          </tr>
          <tr class="tabla-orange text-white">
            <th class="text-center">1000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">1000 MB</th>
            <th class="text-center">
              1000 MB <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 199.00</th>
          </tr>
          <tr>
            <th class="text-center">1500 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">1500 MB</th>
            <th class="text-center">
              1000 MB <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 239.00</th>
          </tr>
          <tr class="tabla-orange text-white">
            <th class="text-center">2000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">2250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 299.00</th>
          </tr>
          <tr>
            <th class="text-center">3000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">3250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 399.00 <br>
              Incluye Claro Video
            </th>
          </tr>
          <tr class="tabla-orange text-white">
            <th class="text-center">5000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">5250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 499.00<br>
              Incluye Claro Video
            </th>
          </tr>
          <tr>
            <th class="text-center">6000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">7250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 599.00<br>
              Incluye Claro Video
            </th>
          </tr>
          <tr class="tabla-orange text-white">
            <th class="text-center">6500 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">8250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 699.00<br>
              Incluye Claro Video</th>
          </tr>
          <tr>
            <th class="text-center">7000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">10250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 799.00<br>
              Incluye Claro Video</th>
          </tr>
          <tr class="tabla-orange text-white">
            <th class="text-center">8000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">11250 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 899.00</th>
          </tr>
          <tr>
            <th class="text-center">9000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">14000 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 999.00<br>
              Incluye Claro Video</th>
          </tr>
          <tr class="tabla-orange text-white">
            <th class="text-center">12000 4G</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">Ilimitados</th>
            <th class="text-center">16000 MB</th>
            <th class="text-center">
              Ilimitado por promocion <br>
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </th>
            <th class="text-center">$ 1,299.00<br>
              Incluye Claro Video</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
@push('scriptsC')
  <script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel();
  });
  </script>

@endpush
