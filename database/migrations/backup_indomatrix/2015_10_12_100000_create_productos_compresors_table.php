<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::dropIfExists('productos_compresors');

class CreateProductosCompresorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_compresors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();
            $table->text('imagen1')->nullable();
            $table->text('imagen2')->nullable();
            $table->text('titulo')->nullable();
            $table->text('texto')->nullable();
            $table->text('texto1')->nullable();
            $table->text('ficha')->nullable();
            $table->text('dibujo')->nullable();
            $table->text('dibujo1')->nullable();
            $table->text('ruta')->nullable();
            $table->text('orden')->nullable();  
            $table->integer('id_categorias_compresors')->unsigned();
            $table->foreign('id_categorias_compresors')->references('id')->on('categorias_compresors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos_compresors');
    }

}
