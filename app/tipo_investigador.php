<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_investigador extends Model
{
    protected $table = "tipos_investigadores";

    protected $fillable = ['tipo_id', 'tipo_investigador'];

    public function investigadores()
    {
    	return $this->hasMany('App\investigador'); // Relacion de 1 a muchos
    }

}
