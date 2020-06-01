<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('libroId');
            $table->string('nombre');
            $table->integer('autorId')->unsigned();
            $table->foreign('autorId')->references('autorId')->on('autores');

            $table->integer('clasificacionId')->unsigned();
            $table->foreign('clasificacionId')->references('clasificacionId')->on('clasificaciones');
            $table->integer('añoPublicacion');
            $table->longText('descripcion');
            $table->text('imagen');
            $table->float('calificacion');
            $table->enum('tipo', array('gratis', 'paga'));
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
        Schema::dropIfExists('libros');
    }
}
