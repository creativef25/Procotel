<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Promocion;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $producto = Producto::all();
      $promo = Promocion::all();

        return view('admin.promo', compact('producto', 'promo'));
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
        $promo = new Promocion();
        $promo->id_producto = $request->id_producto;
        $promo->precio = $request->precio;
        $promo->precio1 = $request->precio1;
        $promo->precio2 = $request->precio2;
        $promo->save();
        return redirect()->route('promociones.index')
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
      $promo = Promocion::find($id);
      $promo->id_producto = $request->id_producto;
      $promo->precio = $request->precio;
      $promo->precio1 = $request->precio1;
      $promo->precio2 = $request->precio2;
      $promo->update();
      return redirect()->route('promociones.index')
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
        $promo = Promocion::find($id)->delete();
        return redirect()->route('promociones.index')
                         ->with('success', 'Los datos se eliminaron correctamente.');
    }


    public function ObtenerPrecio(Request $request){

      $precio = Producto::find($request->id);

      return response()->json(array('precio' => $precio->precio), 200);
    }
}
