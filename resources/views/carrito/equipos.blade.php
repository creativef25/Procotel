@extends('carrito')
@section('containerC')
  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('carrito/images/equipos.jpg')}}" alt="First slide">
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Móvil</h1>
          <span>La más amplia gama de marcas y modelos para todo tipo de negocio</span>
          <a href="{{ route('detalleEquipo', 1)}}" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Ver equipos</a>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('carrito/images/Empresarial_Destacado_telefonos.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img height="85%" src="{{ asset('carrito/images/Empresarial_Destacado_tablets.jpg')}}" alt="">
        </div>
        <div class="col-md-7">
          <h1>Tablet</h1>
          <span>Incrementa la productividad con las mejores tablets para profesionales</span>
          <a href="{{ route('detalleEquipo', 2)}}" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Ver equipos</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>WiFi Móvil Telcel </h1>
          <span>Mantente conectado y simplifica la gestión de tu negocio</span>
          <a href="{{ route('detalleEquipo', 3)}}" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Ver equipos</a>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('carrito/images/Empresarial_Destacado_routers.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img height="85%" src="{{ asset('carrito/images/Empresarial_Destacado_modems.jpg')}}" alt="">
        </div>
        <div class="col-md-7">
          <h1>Módems USB</h1>
          <span>La mejor tecnología para tus necesidades de red inalámbrica</span>
          <a href="{{ route('detalleEquipo', 4)}}" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Ver equipos</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Localización Vehicular</h1>
          <span>Rastrea y controla los activos de tu empresa</span>
          <a href="{{ route('detalleEquipo', 5)}}" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Ver equipos</a>
        </div>
        <div class="col-md-5">
          <img height="85%" src="{{ asset('carrito/images/empresarial_destacado_localizacionv2.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>


@endsection
