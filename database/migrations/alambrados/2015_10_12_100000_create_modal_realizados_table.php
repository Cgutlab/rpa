<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::dropIfExists('modal_realizados');

class CreateServItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modal_realizados', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();
            $table->text('imagen1')->nullable();
            $table->text('imagen2')->nullable();
            $table->text('titulo')->nullable();
            $table->text('subtitulo')->nullable();
            $table->text('texto')->nullable();
            $table->text('ruta')->nullable();
            $table->text('orden')->nullable();
/*
            $table->integer('id_categorias_luminarias')->unsigned();
            $table->foreign('id_categorias_luminarias')->references('id')->on('categorias_luminarias')->onDelete('cascade');
*/
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modal_realizados');
    }
}
