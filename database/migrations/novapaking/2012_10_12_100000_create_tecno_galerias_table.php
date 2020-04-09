<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::dropIfExists('tecno_galerias');

class CreateTecnoGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecno_galerias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();            
            $table->text('titulo')->nullable();            
            $table->text('texto')->nullable();            
            $table->text('orden')->nullable();  
            $table->integer('id_tecno_items')->unsigned();
            $table->foreign('id_tecno_items')->references('id')->on('tecno_items')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tecno_galerias');
    }
}
