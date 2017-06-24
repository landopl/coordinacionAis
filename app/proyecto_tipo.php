<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto_tipo extends Model
{
    protected $table = "proyectos_tipo";

    protected $fillable = ['proyecto_id', 'proyecto_tipo_id'];


    public function proyectos_nombres_tipos()
    {
    	return $this->hasOne('App\proyecto_nombre_tipo');
    }
}
