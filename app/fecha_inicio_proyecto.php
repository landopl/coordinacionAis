<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fecha_inicio_proyecto extends Model
{
    protected $table = "fechas_inicio_proyectos";

    //fillable son los cammpos permitidos para mostrar los datos json (que campos quieres que traiga)
    protected $fillable =['proyecto_id', 'fecha_inicio_proyecto'];


    public function fecha_inicio_proyecto()
    {
    	return $this->belongsTo('App\proyecto'); // Relacion de muchos a uno
    }
}
