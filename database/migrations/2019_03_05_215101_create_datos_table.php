<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ape_Paterno');
            $table->string('ape_Materno');
            $table->string('telefono');
            $table->integer('edad');
            $table->string('calle');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('alcaldia');
            $table->integer('codigoPostal');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
}
