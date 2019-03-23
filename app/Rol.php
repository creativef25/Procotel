<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

  public function user(){
    return $this->hasOne('App\User', 'id_rol', 'id');
  }


}
