<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linea_investigacion extends Model
{
    protected $table = "lineas_investigacion";

    protected $fillable = ['id','denominacion', 'fecha_aprobacion_linea'];



    public function investigadores_lineas()
    {
    	return $this->belongsToMany('App\investigador'); // Relacion de muchos a muchos
    }

    public function proyectos_lineas()
    {
    	return $this->hasMany('App\proyecto'); // relacion 1 a muchos
    }

     public function linea_investigacion_coordinador()
    {
        return $this->hasOne('App\linea_coordinador');
    }

    public function lineas_investigadores()
    {
        return $this->belongsToMany('App\linea_investigador');
    }

}
