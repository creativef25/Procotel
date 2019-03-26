<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Producto extends Model
{
    protected $table = 'detalle__productos';

    protected $fillable = ['id_pedido', 'id_producto', 'cantidad', 'total', 'entrega'];
}
