<?php
use App\Producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('procotel');
});

Route::group(['middleware' => ['auth', 'admin:admin']], function(){
  Route::get('inicio', 'PrincipalController@index')->name('dashboard');
  Route::resource('categorias', 'CategoriasController');
  Route::resource('tipoGama', 'GamasController');
  Route::resource('marcas', 'MarcasController');
  Route::resource('usuarios', 'UsuariosController');
  Route::resource('imagen', 'ImagenController');
  Route::resource('producto', 'ProductoController');
  Route::resource('datos', 'DatoController');
  Route::get('detalle/pedido/{id}', 'PrincipalController@detallePedido')->name('DetallePed');
  Route::get('entrega/{id}', 'PrincipalController@entregado')->name('entrega');
  Route::get('/pedido', 'PrincipalController@pedidosA')->name('pedidosA');
  Route::resource('promociones', 'PromocionesController');
  Route::post('promo/precio', 'PromocionesController@ObtenerPrecio')->name('preciopromo');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('', 'PrincipalController@principal')->name('procotel');
Route::get('detalle/producto/{id}', 'PrincipalController@detalleProducto')->name('detalleProd');
Route::get('gama/{id}', 'PrincipalController@gamaProducto')->name('gamaP');
Route::get('marca/{id}', 'PrincipalController@marcaProducto')->name('marcaP');
Route::get('/contacto', 'PrincipalController@contacto')->name('contacto');
Route::get('/nosotros', 'PrincipalController@nosotros')->name('nosotros');
Route::get('/tienda', 'PrincipalController@tienda')->name('tienda');
Route::get('/precios', 'PrincipalController@precios')->name('precios');
Route::get('/detalle/promocion/{id}', 'PrincipalController@detallePromocion')->name('detallePromo');
Route::post('correo/envio', 'PrincipalController@correo')->name('correo');
Route::post('busqueda/categoria', 'PrincipalController@busquedaCate')->name('busquedaCate');
Route::post('busqueda/marca', 'PrincipalController@busquedaMarca')->name('busquedaMarca');

Route::bind('producto', function($id){
  return App\Producto::where('id', $id)->first();
});

Route::get('lista/productos', 'CarritoController@show')->name('carrito-show');
Route::get('carrito/add/{producto}', 'CarritoController@add')->name('carrito-add');
Route::get('carrito/eliminar/{producto}', 'CarritoController@delete')->name('carrito-delete');
Route::get('carrito/update/{producto}/{quantity?}', 'CarritoController@updateCantidad')->name('carrito-update');

Route::group(['middleware' => ['auth', 'admin:user']], function(){
  Route::get('/perfil', 'CarritoController@perfil')->name('perfil');
  Route::post('/datos', 'CarritoController@addDatos')->name('addDatos');
  Route::post('/pagar', 'CarritoController@pagoTarjeta')->name('pagoT');
  Route::post('/getCheckout', 'CarritoController@getCheckout')->name('getCheckout');
  Route::get('/getDone', 'CarritoController@getDone')->name('getDone');
  Route::get('/getCancel', 'CarritoController@getCancel')->name('getCancel');
  Route::get('/pedidos', 'CarritoController@pedido')->name('pedido');
});
