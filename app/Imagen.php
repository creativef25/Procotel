<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  protected $table =  'imagens';

  protected $fillable = ['path', 'id_producto', 'id_marca','imgPrincipal'];

  public function Producto(){
    return $this->belongsTo('App\Producto', 'id', 'id_producto');
  }

  public function MarcaI(){
    return $this->belongsTo('App\Marca', 'id', 'id_marca');
  }


}
