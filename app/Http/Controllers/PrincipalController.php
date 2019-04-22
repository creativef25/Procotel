<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Pedido;
use App\Producto;
use App\Categoria;
use App\Promocion;
use App\Imagen;

class PrincipalController extends Controller
{
    public function index(){

      $pedidos = Pedido::whereNull('entrega')->get();
      //dd($pedidos);

      return view('admin.pedEntregar', compact('pedidos'));
    }

    public function principal(){

      $marca = Marca::all();
      $produ = Producto::inRandomOrder()->take(16)->get();

      return view('carrito.principal', compact('marca','produ'));
    }

    public function detalleProducto($id){

      $produ = Producto::find($id);
      return view('carrito.detalleProducto', compact('produ'));
    }

    public function gamaProducto($id){
      $cate = Categoria::all();
      $produ = Producto::where('id_gama', $id)->get();
      return view('carrito.gamasProd', compact('cate', 'produ'));
    }

    public function marcaProducto($id){
      $cate = Categoria::all();
      $produ = Producto::where('id_marca', $id)->get();
      return view('carrito.marcaProducto', compact('cate', 'produ'));
    }

    public function detallePedido($id){
      $pedido = Pedido::where('id', $id)->get();
      return view('admin.detaPedido', compact('pedido'));
    }

    public function entregado($id){
      $pedido = Pedido::where('id',$id)->update([
        "entrega" => 1
      ]);
    }

    public function pedidosA(){
      $pedi = Pedido::all();
      return view('admin.pedidos', compact('pedi'));
    }

    public function contacto(){
      return view('carrito.contacto');
    }

    public function nosotros(){
      return view('carrito.nosotros');
    }

    public function tienda(){
      $cate = Categoria::all();
      $produ = Producto::all();
      $marca = Marca::all();
      return view('carrito.tienda', compact('cate', 'produ', 'marca'));
    }

    public function precios(){
      $promo =  Promocion::all();
      return view('carrito.precios', compact('promo'));
    }

    public function detallePromocion($id){

      $produ = Producto::find($id);
      return view('carrito.detallePromo', compact('produ'));
    }

    public function correo(Request $request){

      return redirect()->route('procotel');
    }

    public function busquedaCate(Request $request){
      $cate = Producto::where('id_categoria', $request->id)->get();
      return view('carrito.catego', compact('cate'));
    }

    public function busquedaMarca(Request $request){
      $marca = Producto::where('id_marca', $request->id)->get();
      return view('carrito.marca', compact('marca'));
    }

    public function equipos(){
      $producto = Producto::where('empresarial', 1)
                          ->where('id_categoria', 1)->get();
      return view('carrito.equipos', compact('producto'));
    }

    public function detalleEquipo($id){
      switch ($id) {
        case '1':
          $produ = Producto::where('empresarial', 1)
                              ->where('id_categoria', 1)
                              ->get();
          $titulo = 'Móvil';
          return view('carrito.equiEmpresa', compact('produ', 'titulo'));
        break;
        case '2':
          $produ = Producto::where('empresarial', 1)
                            ->where('id_categoria', 2)
                            ->get();
          $titulo = 'Tablet';
          return view('carrito.equiEmpresa', compact('produ', 'titulo'));
        break;
        case '3':
          $produ = Producto::where('empresarial', 1)
                            ->where('id_categoria', 3)
                            ->get();
          $titulo = 'WiFi Móvil Telcel';
          return view('carrito.equiEmpresa', compact('produ', 'titulo'));
        break;
        case '4':
          $produ = Producto::where('empresarial', 1)
                            ->where('id_categoria', 4)
                            ->get();
          $titulo = 'Módems USB';
          return view('carrito.equiEmpresa', compact('produ', 'titulo'));
        break;
        case '5':
          $produ = Producto::where('empresarial', 1)
                            ->where('id_categoria', 5)
                            ->get();
          $titulo = 'Localización Vehicular';
          return view('carrito.equiEmpresa', compact('produ', 'titulo'));
        break;

        default:
          // code...
          break;
      }
    }

    public function promo(){
      $imagen = Imagen::where('promocion', 1)->get();
      return view('carrito.promociones', compact('imagen'));
    }

    public function sinlimite(){
      return view('carrito.sinlimite');
    }

    public function plansinlimite(){
      return view('carrito.sinlimite1');
    }
}
