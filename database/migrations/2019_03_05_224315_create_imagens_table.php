<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('id_producto')->unsigned()->nullable();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->integer('id_marca')->unsigned()->nullable();
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->integer('imgPrincipal')->nullable();
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
        Schema::dropIfExists('imagens');
    }
}
