<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;

class GamasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoG = Gama::all();

        return view('admin.tipoGama', compact('tipoG'));
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
        $gama =  Gama::create($request->all());

        return redirect()->route('tipoGama.index')
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
        $gama = Gama::find($id)->update($request->all());
        return redirect()->route('tipoGama.index')
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
        $gama = Gama::find($id);
        $gama->delete();

        return redirect()->route('tipoGama.index')
                         ->with('success', 'El registro se elimino correctamente.');
    }
}
