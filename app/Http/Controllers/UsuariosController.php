<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usu = User::all();
        $rol = Rol::all();

        return view('admin.usuarios', compact('usu','rol'));
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
        $usu = new User();
        $usu->name = $request->name;
        $usu->email = $request->email;
        $usu->password = bcrypt($request->password);
        $usu->id_rol = $request->id_rol;
        $usu->save();

        return redirect()->route('usuarios.index')
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
      $usu = User::find($id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'id_rol' => $request->id_rol]);

        return redirect()->route('usuarios.index')
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
      $usu = User::find($id);
      $usu->delete();

      return redirect()->route('usuarios.index')
                       ->with('success', 'El registro se elimino correctamente.');
    }
}
