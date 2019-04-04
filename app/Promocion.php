<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable = ['id_producto', 'precio', 'precio1', 'precio2'];
}
