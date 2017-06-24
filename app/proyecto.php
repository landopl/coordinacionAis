<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table = "proyectos";

    protected $fillable = ['titulo', 'resumen', 'objetivos', 'justificacion', 'linea_investigacion_id'];

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

    public function proyecto_fecha()
    {
    	return $this->belongsTo('AA\fecha_proyecto');
    }
}
	