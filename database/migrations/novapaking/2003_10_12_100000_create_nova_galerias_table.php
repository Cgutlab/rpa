<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovaGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nova_galerias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen')->nullable();            
            $table->text('titulo')->nullable();            
            $table->text('texto')->nullable();            
            $table->text('orden')->nullable();  
            $table->integer('id_nova_productos')->unsigned();
            $table->foreign('id_nova_productos')->references('id')->on('nova_productos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nova_galerias');
    }
}
