<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marca = Marca::all();
        return view('admin.marcas', compact('marca'));
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
      $marca =  Marca::create($request->all());

      return redirect()->route('marcas.index')
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
      $marca = Marca::find($id)->update($request->all());
      return redirect()->route('marcas.index')
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
      $marca = Marca::find($id);
      $marca->delete();

      return redirect()->route('marcas.index')
                       ->with('success', 'El registro se elimino correctamente.');
    }
}
