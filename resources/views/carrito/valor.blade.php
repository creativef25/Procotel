@extends('carrito')
@section('containerC')

  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(carrito/images/valor_agregado.png);">
    <h2 class="l-text2 t-center">
      Servicio de valor agregado
    </h2>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Payapp</h1><br>
          <span>Somos una plataforma de venta de tiempo aire y pago de servicios por medio de WhatsApp, Telegram y SMS, 100% segura y confiable.</span><br><br>
          <span >La interfaz ofrece un sistema inteligente y amigable. Te guía paso a paso al realizar cualquier tipo de movimiento que necesites. Realiza una descarga o abonar saldo a tu cuenta.</span>
          <a href="http://payapp.mx/" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-top: 5%;">Ver mas</a>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('carrito/images/payapp1.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img height="55%" src="{{ asset('carrito/images/GPS.png')}}" alt="">
        </div>
        <div class="col-md-7">
          <h1>Gestión Vehicular</h1><br>
          <span>Localiza, rastrea y gestiona las funcionalidades de tu flotilla en tiempo real</span><br><br>
          <span>Solución de administración de unidades vehiculares mediante GPS, y la Red móvil, que cuenta con avanzados sistemas de seguridad, inteligencia para recolección y análisis de información crítica, con capacidad de integrarse con sistemas CRM.</span><br><br>
          <span>Reduce costos al optimizar operaciones logísticas y logra mayor retorno de inversión, gracias al mantenimiento preventivo que se logra con monitoreo y obtención de telemetría de las unidades en tiempo real.</span>
          <a href="https://api.whatsapp.com/send?phone=5215544551508&text=Hola%20requiero%20informacion" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-top: 5%;">Contactanos</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Bots</h1><br>
          <span>Inteligencia artificial que aumenta tus ventas y mejora la experiencia de tus clientes</span><br><br>
          <span >A través de inteligencia artificial detectamos la intención de lo que escriben tus clientes. Ideal para empresas grandes con varios servicios y productos.</span><br><br>
          <span>El bot puede mostrar tu catálogo de productos y servicios, tomar pedidos y hasta cobrar con tarjeta de crédito o débito de manera muy sencilla. Perfecto para empresas transaccionales o que hacen cobros de membresías.</span>
          <a href="https://api.whatsapp.com/send?phone=5215544551508&text=Hola%20requiero%20informacion" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-top: 5%;">Contactanos</a>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('carrito/images/bot.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-66 p-b-38">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img height="85%" src="{{ asset('carrito/images/sms.png')}}" alt="">
        </div>
        <div class="col-md-7">
          <h1>Envio de SMS</h1><br>
          <span>Mejora la comunicación con tus usuarios.</span><br><br>
          <span>Envía notificaciones oportunas sobre citas próximas, pedidos, entregas, transacciones, eventos, pagos pendientes y más para mantener a tus clientes interesados.</span><br><br>
          <span>Incluye la eficiencia de SMS a todos los procesos de comunicación de tu empresa, tus usuarios agradecerán la información útil y a tiempo.</span>
          <a href="https://api.whatsapp.com/send?phone=5215544551508&text=Hola%20requiero%20informacion" class="flex-c-m size9 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-top: 5%;">Contactanos</a>
        </div>
      </div>
    </div>
  </section>

@endsection
