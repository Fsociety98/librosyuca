<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_libros', function (Blueprint $table) {
            $table->increments('libro_usuarioId');
            $table->integer('usuarioId')->unsigned();
            $table->foreign('usuarioId')->references('usuarioId')->on('usuarios');
            $table->integer('libroId')->unsigned();
            $table->foreign('libroId')->references('libroId')->on('libros');
            $table->integer('libro_estadoId')->unsigned();
            $table->foreign('libro_estadoId')->references('libro_estadoId')->on('libro_estados');
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
        Schema::dropIfExists('usuario_libros');
    }
}
