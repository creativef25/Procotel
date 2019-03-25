<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['id_usuario'];

    public function usuario(){
      return $this->belongsTo('App\User', 'id', 'id_usuario');
    }

    public function produDet(){
      return $this->hasMany('App\Detalle_Producto');
    }
}
