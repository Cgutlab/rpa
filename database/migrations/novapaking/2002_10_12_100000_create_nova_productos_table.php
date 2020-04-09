<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nova_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo')->nullable();            
            $table->text('subtitulo')->nullable();            
            $table->text('texto')->nullable();            
            $table->text('orden')->nullable();  
            $table->text('ruta')->nullable();  
            $table->integer('id_nova_categorias')->unsigned();
            $table->foreign('id_nova_categorias')->references('id')->on('nova_categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nova_productos');
    }
}
