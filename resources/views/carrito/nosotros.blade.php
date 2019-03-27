@extends('carrito')
@section('containerC')

  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(carrito/images/heading-pages-05.jpg);">
		<h2 class="l-text2 t-center">
			Nosotros
		</h2>
	</section>

  <section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="{{ asset('carrito/images/banner-14.jpg')}}" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Procotel
					</h3>

					<p>
						Una empresa con 14 años de experiencia adquirida y demostramos que en la actualidad, el poder llevar los productos y servicios hasta las puertas mismas de su negocio.
					</p><br>
          <p>
            Pare ello hemos diseñado un plan estratégico que nos permite de forma práctica y eficaz satisfacer de manera inmediata las necesidades de tosos sus empleados, en el aspecto de telefonía celular.
          </p><br>
          <p>
            Contamos con Personal perfectamente adiestrado y con gran capacidad de solución, atendemos hoy día a muchas empresas en el mismo establecimiento de nuestros clientes, sin que ello represente un céntimo de gasto para ellos, pero si con los beneficios de respuesta inmediata y solución de problemas.
          </p>
				</div>
			</div>
		</div>
	</section>

@endsection
