<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
use App\Marca;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mar =  Marca::all();
        $cate =  Categoria::all();
        $gam = Gama::all();
        $produ = Producto::all();

        return view ('admin.producto', compact('mar','cate','gam','produ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new Producto();
        $pro->nombre = $request->nombre;
        $pro->descripcion = $request->descripcion;
        $pro->precio = $request->precio;
        $pro->modelo = $request->modelo;
        $pro->color = $request->color;
        $pro->android = $request->android;
        $pro->procesador =  $request->procesador;
        $pro->camara =  $request->camara;
        $pro->pantalla =  $request->pantalla;
        $pro->capacidad = $request->capacidad;
        $pro->memoria =  $request->memoria;
        $pro->id_marca = $request->id_marca;
        $pro->id_categoria = $request->id_categoria;
        $pro->id_gama = $request->id_gama;
        $pro->save();


        return redirect()->route('producto.index')
                        ->with('success', 'Los datos se guardaron correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pro = Producto::find($id);
      $pro->nombre = $request->nombre;
      $pro->descripcion = $request->descripcion;
      $pro->precio = $request->precio;
      $pro->modelo = $request->modelo;
      $pro->color = $request->color;
      $pro->android = $request->android;
      $pro->procesador =  $request->procesador;
      $pro->camara =  $request->camara;
      $pro->pantalla =  $request->pantalla;
      $pro->capacidad = $request->capacidad;
      $pro->memoria =  $request->memoria;
      $pro->id_marca = $request->id_marca;
      $pro->id_categoria = $request->id_categoria;
      $pro->id_gama = $request->id_gama;
      $pro->update();

        return redirect()->route('producto.index')
                         ->with('success', 'Tu registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Producto::find($id)->delete();

        return redirect()->route('producto.index')
                         ->with('success', 'Los datos se eliminaron correctamente.');
    }
}
