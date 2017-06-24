<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\linea_investigacion;
use App\proyecto;
use App\proyecto_tipo;
use App\proyecto_nombre_tipo;
use App\proyecto_estatus;

class proyectosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              

        $lineas = linea_investigacion::all();
        $lineas->toArray();
        $tipo_proyectos = proyecto_nombre_tipo::all();
        $tipo_proyectos->toArray();
        return view('admin.proyectos.crear', ['lineas' => $lineas, 'tipo_proyectos' => $tipo_proyectos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyectos= new proyecto($request->all());
        $proyectos->save();
        //dd($proyectos);

        $proyecto = proyecto::all();
        $proyecto_id = $proyecto->last();
        //dd($proyecto_id['id']);

        $proyecto_tipo = new proyecto_tipo($request->all());
        $proyecto_tipo['proyecto_id'] = $proyecto_id['id'];

        $proyecto_nombre_tipo= new proyecto_nombre_tipo($request->all());
        $proyecto_tipo['proyecto_tipo_id'] = $proyecto_nombre_tipo['tipo_proyecto'];
        $proyecto_tipo->save();
        //dd($proyecto_tipo);


        $proyecto_estatus = new proyecto_estatus($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
