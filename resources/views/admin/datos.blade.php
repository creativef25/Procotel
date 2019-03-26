@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Datos</a>
  </div>
@endpush
@section('container')

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h2 class="card-title">Datos registrados</h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Telefono</th>
                  <th>Edad</th>
                  <th>Calle</th>
                  <th>Ciudad</th>
                  <th>Colonia</th>
                  <th>Alcaldia</th>
                  <th>Codigo Postal</th>
                </tr>
              </thead>
              @foreach ($datos as $dato)
                <tbody>
                  <tr>
                    <th>{{$dato->id}}</th>
                    <th>{{$dato->nombre}}</th>
                    <th>{{$dato->ape_Paterno}}</th>
                    <th>{{$dato->ape_Materno}}</th>
                    <th>{{$dato->telefono}}</th>
                    <th>{{$dato->edad}}</th>
                    <th>{{$dato->calle}}</th>
                    <th>{{$dato->ciudad}}</th>
                    <th>{{$dato->colonia}}</th>
                    <th>{{$dato->alcaldia}}</th>
                    <th>{{$dato->codigoPostal}}</th>                    
                  </tr>
                </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
