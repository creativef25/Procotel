<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('precio')->nullable();
            $table->string('modelo')->nullable();
            $table->string('color')->nullable();
            $table->string('android')->nullable();
            $table->string('procesador')->nullable();
            $table->string('camara')->nullable();
            $table->string('pantalla')->nullable();
            $table->string('capacidad')->nullable();
            $table->string('memoria')->nullable();
            $table->boolean('empresarial')->nullable();
            $table->integer('id_marca')->unsigned();
            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->integer('id_gama')->unsigned();
            $table->foreign('id_gama')->references('id')->on('gamas')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}
