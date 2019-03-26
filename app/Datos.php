<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $table = 'datos';

    protected $fillable = ['nombre', 'ape_Paterno', 'ape_Materno', 'telefono', 'edad', 'calle', 'ciudad', 'colonia', 'alcaldia', 'codigoPostal', 'id_usuario'];
}
