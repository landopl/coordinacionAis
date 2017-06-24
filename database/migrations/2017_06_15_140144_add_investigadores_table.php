<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInvestigadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->double('cedula');
            $table->char('sexo');
            $table->string('correo');
            $table->double('telefono');
            $table->integer('linea_investigacion_id')->unsigned();
            $table->date('fecha_registro_investigador');

            $table->foreign('tipo_id')->references('tipo_id')->on('tipos_investigadores')->onDelete('cascade');

            // $table->foreign('linea_investigacion_id')->references('id')->on('lineas_investigacion')->onDelete('cascade');


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
        Schema::dropIfExists('investigadores');
    }
}
