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
            $table->text('codigo')->nullable();
            $table->text('titulo')->nullable();
            $table->text('texto')->nullable();
            $table->text('orden')->nullable();
            $table->boolean('visible')->default('1')->nullable();
            $table->enum('oferta', ['ninguna','descuento', 'oportunidad', 'ultimos'])->nullable();
            $table->integer('id_categoria')->unsigned()->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');

            $table->integer('id_marca')->unsigned()->nullable();
            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('color_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_color')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_color')->references('id')->on('colores')->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('talla_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_talla')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_talla')->references('id')->on('tallas')->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('talla_producto');
        Schema::dropIfExists('color_producto');
        Schema::dropIfExists('productos');
    }
}
