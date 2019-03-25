<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Producto;
use App\Categoria;

class PrincipalController extends Controller
{
    public function index(){
      return view('app');
    }

    public function principal(){

      $marca = Marca::all();
      $produ = Producto::all();

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
}
