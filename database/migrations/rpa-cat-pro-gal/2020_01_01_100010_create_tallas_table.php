<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void  XL XG
     */
    public function up()
    {
        Schema::create('tallas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo')->nullable();
            $table->text('orden')->nullable();
            /*$table->enum('status', ['off', 'on'])->default('on');
            $table->boolean('status')->default('1');*/
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
        Schema::dropIfExists('tallas');
    }
}
