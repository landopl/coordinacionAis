<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investigador extends Model
{
    //este es para dar con la tabla en la base de datos con la que se va a trabajar 
    protected $table = "investigadores";

    //fillable son los cammpos permitidos para mostrar los datos json (que campos quieres que traiga)
    protected $fillable =['tipo_id', 'nombre', 'apellido', 'cedula', 'sexo', 'correo', 'telefono', 'linea_investigacion_id', 'fecha_registro_investigador'];


    public function tipo_investigador()
    {
    	return $this->belongsTo('App\tipo_investigador'); // Relacion de muchos a 1
    }

    public function investigadores_proyectos()
    {
        return $this->belongsToMany('App\proyecto'); // Relacion muchos a muchos
    }

    public function lineas_investigacion_investigadores()
    {
        return $this->belongsToMany('App\linea_investigacion'); //Relacion muchos a muchos
    }
     public function coordinador_linea()
    {
        return $this->hasOne('App\linea_coordinador');
    }
}
