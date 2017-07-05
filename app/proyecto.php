<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table = "proyectos";

    protected $fillable = ['id', 'titulo', 'resumen', 'objetivos', 'justificacion', 'linea_investigacion_id'];

    public function linea_investigacion_proyecto()
    {
    	return $this->belongsto('App\linea_investigacion'); // Relacion de muchos a 1
    }

    public function proyecto_estatus()
    {
    	return $this->belongsTo('App\proyecto_estatus'); 
    }

    public function proyecto_tipo()
    {
    	return $this->belongsTo('AA\proyecto_tipo');
    }

    public function proyectos_investigadores()
    {
    	return $this->belongsToMany('App\investigador')->withTimestamps(); // Relacion de muchos a muchos
    }

    public function proyecto_fecha_registro()
    {
    	return $this->hasMany('App\fecha_registro_proyecto');
    }

    public function proyecto_fecha_inicio()
    {
        return $this->hasMany('App\fecha_inicio_proyecto');
    }


    public function proyecto_fecha_culminacion()
    {
        return $this->hasMany('App\fecha_registro_proyecto');
    }
}
	