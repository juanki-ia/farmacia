<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReposicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposiciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 256);
            $table->date('fecha_creacion');
            $table->string('observacion', 256);
            $table->bigInteger('id_proveedor')->unsigned()->nullable();
            $table->bigInteger('id_usuario')->unsigned()->nullable();
            
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reposiciones');
    }
}
