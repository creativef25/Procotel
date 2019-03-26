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

    public function producto(){
      return $this->belongsToMany('App\Producto', 'detalle__productos', 'id_pedido', 'id_producto')
                  ->withPivot('cantidad', 'total');
    }
}
