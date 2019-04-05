<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{

  protected $table = 'promocions';


    protected $fillable = ['id_producto', 'precio', 'precio1', 'precio2'];

    public function producto(){
      return $this->belongsTo('App\Producto', 'id_producto', 'id');
    }
}
