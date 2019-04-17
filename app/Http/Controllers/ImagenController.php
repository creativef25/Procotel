<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Imagen;
use Image;
use App\Producto;
//use Faker\Provider\Image;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $marca = Marca::all();
        $img = Imagen::all();
        $produ = Producto::all();

        return view('admin.imagen', compact('marca','img','produ'));
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

      if (!empty($request->imgPrincipal)) {
        $file = $request->file('path');
        $extension = $file->getClientOriginalExtension();
        $path = public_path("/imagenes");
        $nombre = $this->random_string().".".$extension;

        \Image::make($file)->resize(720,960)->save($path.'/'.$nombre);
      }elseif (!empty($request->promocion)) {
        $file = $request->file('path');
        $extension = $file->getClientOriginalExtension();
        $path = public_path("/imagenes");
        $nombre = $this->random_string().".".$extension;

        \Image::make($file)->resize(1275,1650)->save($path.'/'.$nombre);
      }

      else {
        $file = $request->file('path');
        $extension = $file->getClientOriginalExtension();
        $path = public_path("/imagenes");
        $nombre = $this->random_string().".".$extension;

        \Image::make($file)->resize(500,480)->save($path.'/'.$nombre);

      }

        if ($request->inlineRadioOptions == "Marca") {
          $image = Imagen::create([
            'path' => $nombre,
            'id_marca' => $request->id_marca,
          ]);
        }elseif ($request->inlineRadioOptions == "Producto" && empty($request->imgPrincipal)) {
          $image = Imagen::create([
            'path' => $nombre,
            'id_producto' => $request->id_producto,
            ]);
        }elseif (!empty($request->promocion)) {
          $image = Imagen::create([
            'path' => $nombre,
            'promocion' => 1,
            ]);
        }
        else {
          $image = Imagen::create([
            'path' => $nombre,
            'id_producto' => $request->id_producto,
            'imgPrincipal' => $request->imgPrincipal,
          ]);
        }
        return redirect()->route('imagen.index')
                         ->with('success', 'Los datos se guardaron correctamente.');
    }

    protected function random_string()
{
    $key = '';
    $keys = array_merge( range('a','z'), range(0,9) );

    for($i=0; $i<10; $i++)
    {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $img = Imagen::find($id);
        unlink(public_path("imagenes\\"."$img->path"));
        $img->delete();
        return redirect()->route('imagen.index')
                         ->with('success', 'El registro se elimino correctamente.');

    }
}
