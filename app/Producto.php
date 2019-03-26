<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillables = ['nombre', 'descripcion', 'precio', 'modelo', 'color','android', 'procesador', 'camara', 'pantalla', 'capacidad', 'memoria', 'id_marca', 'id_categoria', 'id_gama'];

    public function Marca(){
      return $this->hasOne('App\Marca', 'id', 'id_marca');
    }

    public function Categ(){
      return $this->hasOne('App\Categoria', 'id', 'id_categoria');
    }

    public function Gama(){
      return $this->hasOne('App\Gama', 'id', 'id_gama');
    }

    public function Imagen(){
      return $this->hasMany('App\Imagen', 'id_producto', 'id');
    }

    public function pedido(){
      return $this->belongsToMany('App\Pedido', 'detalle__productos', 'id_producto', 'id_pedido');
    }
}
