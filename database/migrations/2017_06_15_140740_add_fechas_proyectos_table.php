<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFechasProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechas_proyectos', function (Blueprint $table) {
            $table->increments('proyecto_id')->unsigned();
            $table->date('fecha_registro_proyecto');
            $table->date('fecha_inicio_proyecto');
            $table->date('fecha_culminacion_proyecto');


            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');

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
        Schema::dropIfExists('fechas_proyectos');
    }
}
