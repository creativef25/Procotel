@extends('app')
@push('titulo')
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="">Productos</a>
  </div>
@endpush
@section('container')
  @if(Session::has('success'))
      <div class="alert alert-info">
        {{Session::get('success')}}
      </div>
      @endif
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">Productos</h2>
              <p class="card-category">Ingresa la información que se te pide</p>
            </div>
            <div class="card-body">
              <form action="{{ route('producto.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Nombre del equipo</label>
                      <input type="text" class="form-control" name="nombre" id="nombreEquipo" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Modelo</label>
                      <input type="text" class="form-control" name="modelo" id="modeloEquipo" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Color</label>
                      <input type="text" class="form-control" name="color" id="colorEquipo" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Precio</label>
                      <input type="text" class="form-control" name="precio" id="PrecioEquipo" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Sistema operativo</label>
                      <input type="text" class="form-control" name="android" id="sistemaOperativo" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Procesador</label>
                      <input type="text" class="form-control" name="procesador" id="procesador" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Camara</label>
                      <input type="text" class="form-control" name="camara" id="camaraProducto" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Pantalla</label>
                      <input type="text" class="form-control" name="pantalla" id="pantallProducto" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Descripción</label>
                      <textarea class="form-control" name="descripcion" rows="8" ></textarea>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Capacidad</label>
                      <input type="text" class="form-control" name="capacidad" id="capacidadProducto" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Memoria</label>
                      <input type="text" class="form-control" name="memoria" id="memoriaProducto" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label for="marcaEquipo">Marca</label>
                      <select class="form-control" id="marcaEquipo" name="id_marca">
                        @foreach ($mar as $marca)
                          <option class="text-success" value="{{ $marca->id}}">{{ $marca->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label for="categoriaEquipo">Categoria</label>
                      <select class="form-control" id="categoriaEquipo" name="id_categoria">
                        @foreach ($cate as $categori)
                          <option class="text-success" value="{{ $categori->id}}">{{ $categori->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group">
                      <label for="gamaEquipo">Gama</label>
                      <select class="form-control" id="gamaEquipo" name="id_gama">
                        @foreach ($gam as $gama)
                          <option class="text-success" value="{{ $gama->id}}">{{ $gama->tipo_gama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
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
                      <th>Nombre del equipo</th>
                      <th>Modelo</th>
                      <th>Color</th>
                      <th>Precio</th>
                      <th>Sistema Operativo</th>
                      <th>Procesador</th>
                      <th>Camara</th>
                      <th>Pantalla</th>
                      <th>Capacidad</th>
                      <th>Memoria</th>
                      <th>Descripción</th>
                      <th>Marca</th>
                      <th>Categoria</th>
                      <th>Gama</th>
                      <th>Acciónes</th>
                    </tr>
                  </thead>
                    @foreach ($produ as $product)
                      <tbody>
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->nombre}}</td>
                        <td>{{$product->modelo}}</td>
                        <td>{{$product->color}}</td>
                        <td>$ {{$product->precio}}.00</td>
                        <td>{{ $product->android}}</td>
                        <td>{{ $product->procesador}}</td>
                        <td>{{ $product->camara}}</td>
                        <td>{{ $product->pantalla}}</td>
                        <td>{{ $product->capacidad}}</td>
                        <td>{{ $product->memoria}}</td>
                        <td>{{ substr($product->descripcion, 0, 60)}}</td>
                        <td>{{$product->Marca->nombre}}</td>
                        <td>{{$product->Categ->nombre}}</td>
                        <td>{{$product->Gama->tipo_gama}}</td>
                        <td class="td-action text-left btn-group">
                          <button type="button" rel="tooltip" data-toggle="modal" data-target="#producto{{$product->id}}" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                            <i class="material-icons">edit</i>
                          </button>
                          <form action="{{route('producto.destroy', $product->id)}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Eliminar">
                              <i class="material-icons">close</i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach ($produ as $modalProdu)
    <div class="modal fade" id="producto{{$modalProdu->id}}" tabindex="-1" role="dialog" aria-labelledby="productoLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productoLabel">Modificar nombre de la marca</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('producto.update', $modalProdu->id)}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PUT">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Nombre del equipo</label>
                  <input type="text" class="form-control text-success" name="nombre" id="nombreEquipo" value="{{ $modalProdu->nombre}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Modelo</label>
                  <input type="text" class="form-control text-success" name="modelo" id="modeloEquipo" value="{{ $modalProdu->modelo}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Color</label>
                  <input type="text" class="form-control text-success" name="color" id="colorEquipo" value="{{ $modalProdu->color}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Precio</label>
                  <input type="text" class="form-control text-success" name="precio" id="PrecioEquipo" value="{{ $modalProdu->precio}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Sistema Operativo</label>
                  <input type="text" class="form-control text-success" name="android" id="sistemaOperativo" value="{{ $modalProdu->android}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Procesador</label>
                  <input type="text" class="form-control text-success" name="procesador" id="procesador" value="{{ $modalProdu->procesador}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Camara</label>
                  <input type="text" class="form-control text-success" name="camara" id="camaraProducto" value="{{ $modalProdu->camara}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Pantalla</label>
                  <input type="text" class="form-control text-success" name="pantalla" id="pantallProducto" value="{{ $modalProdu->pantalla}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Capacidad</label>
                  <input type="text" class="form-control text-success" name="capacidad" id="capacidadProducto" value="{{ $modalProdu->capacidad}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Memoria</label>
                  <input type="text" class="form-control text-success" name="memoria" id="memoriaProducto" value="{{ $modalProdu->memoria}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Descripción</label>
                  <textarea class="form-control text-success" name="descripcion" rows="8" >{{ $modalProdu->descripcion}}</textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label for="marcaEquipo">Marca</label>
                  <select class="form-control text-success" id="marcaEquipo" name="id_marca">
                    @foreach ($mar as $marca)
                      <option class="text-success" value="{{ $marca->id}}">{{ $marca->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label for="categoriaEquipo">Categoria</label>
                  <select class="form-control text-success" id="categoriaEquipo" name="id_categoria">
                    @foreach ($cate as $categori)
                      <option class="text-success" value="{{ $categori->id}}">{{ $categori->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label for="gamaEquipo">Gama</label>
                  <select class="form-control text-success" id="gamaEquipo" name="id_gama">
                    @foreach ($gam as $gama)
                      <option class="text-success" value="{{ $gama->id}}">{{ $gama->tipo_gama}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach



@endsection
