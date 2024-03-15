<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('nombre_generico', 40);
            $table->string('nombre_comercial', 40);
            $table->float('precio');
            $table->string('restriccion', 2);
            $table->bigInteger('id_estante')->unsigned()->nullable();
            $table->timestamps();
            
            
            $table->foreign('id_estante')->references('id')->on('estantes')->onDelete('cascade')->onUpdate('cascade');
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
