<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fecha_proyecto extends Model
{
    protected $table = "fechas_proyectos";

    //fillable son los cammpos permitidos para mostrar los datos json (que campos quieres que traiga)
    protected $fillable =['proyecto_id', 'fecha_registro_proyecto', 'fecha_inicio_proyecto', 'fecha_culminacion_proyecto'];


    public function fechas_proyectos()
    {
    	return $this->hasMany('App\proyecto'); // Relacion de 1 a muchos
    }
}
