<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gama extends Model
{
    protected $table = "gamas";

    protected $fillable = ['tipo_gama'];
}
