<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::dropIfExists('productos_novedads');

class CreateProductosNovedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('productos_novedads', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();
            $table->text('titulo')->nullable();
            $table->text('extracto')->nullable();
            $table->text('texto')->nullable();
            $table->text('ficha')->nullable();
            $table->text('fecha')->nullable();
            $table->text('orden')->nullable();  
            $table->integer('id_categorias_novedads')->unsigned();
            $table->foreign('id_categorias_novedads')->references('id')->on('categorias_novedads')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos_novedads');
    }
}
