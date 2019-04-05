<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Pedido;
use App\Producto;
use App\Categoria;
use App\Promocion;

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
      return view('carrito.tienda', compact('cate', 'produ'));
    }

    public function precios(){
      $promo =  Promocion::all();
      return view('carrito.precios', compact('promo'));
    }

    public function detallePromocion($id){

      $produ = Producto::find($id);
      return view('carrito.detallePromo', compact('produ'));
    }
}
