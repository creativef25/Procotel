<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = ['nombre'];

    public function ImageM(){
      return $this->hasOne('App\Imagen', 'id_marca', 'id');
    }
}
