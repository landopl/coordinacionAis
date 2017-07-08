<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\linea_investigacion;
use App\proyecto;
use App\proyecto_tipo;
use App\proyecto_nombre_tipo;
use App\proyecto_estatus;
use App\fecha_registro_proyecto;
use App\fecha_inicio_proyecto;
use App\fecha_culminacion_proyecto;

class proyectosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos          = proyecto::orderBy('id', 'ASC')->paginate(1);
        $proyectos_tipo     = proyecto_tipo::all();
        $proyectos_nombre   = proyecto_nombre_tipo::all();
        $fechas_registro    = fecha_registro_proyecto::all();
        $fechas_inicio      = fecha_inicio_proyecto::all();
        $fechas_culminacion = fecha_culminacion_proyecto::all();
        $estatus            = proyecto_estatus::all();
        $lineas             = linea_investigacion::all();
        

        return view('admin.proyectos.consultaProyectos', ['proyectos' => $proyectos, 'proyectos_tipo' => $proyectos_tipo, 'fechas_registro' => $fechas_registro, 'fechas_inicio' => $fechas_inicio, 'fechas_culminacion' => $fechas_culminacion, 'estatus' => $estatus, 'lineas' => $lineas, 'proyectos_nombre' => $proyectos_nombre]);
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
        $proyectos = new proyecto($request->all());
        $proyectos->save();
        //dd($proyectos);

        $proyecto = proyecto::all();
        $proyecto_id = $proyecto->last();
        //dd($proyecto_id['id']);

        $proyecto_tipo = new proyecto_tipo($request->all());
        $proyecto_tipo['proyecto_id'] = $proyecto_id['id'];

        $proyecto_nombre_tipo = new proyecto_nombre_tipo($request->all());
        $proyecto_tipo['proyecto_tipo_id'] = $proyecto_nombre_tipo['tipo_proyecto'];
        $proyecto_tipo->save();
        //dd($proyecto_tipo);

        $fecha_registro_proyecto = new fecha_registro_proyecto($request->all());

        $fecha_registro_proyecto['proyecto_id'] = $proyecto_id['id'];
        $fecha_registro_proyecto->save();
        //dd($fecha_registro_proyecto); 


        $proyecto_estatus = new proyecto_estatus($request->all());
        $proyecto_estatus['proyecto_id'] = $proyecto_id['id'];
        $proyecto_estatus['estatus'] = 'Por iniciar';
        $proyecto_estatus->save();
        //dd($proyecto_estatus);

         flash('Registro exitoso')->success();

        return redirect()->route('proyectos.index');

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
        $proyectos = proyecto::find($id);
        $lineas = linea_investigacion::all();
        $lineas->toArray();
        $tipo_proyectos = proyecto_nombre_tipo::all();
        $tipo_proyectos->toArray();

        return view('admin.proyectos.editarProyectos', ['proyectos' =>$proyectos, 'lineas' => $lineas, 'tipo_proyectos' => $tipo_proyectos]);
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
        $proyecto = proyecto::find($id);
        $proyecto->delete();

        flash('El proyecto ha sido eliminado exitosamente')->warning();
        return redirect()->route('proyectos.index');
    }
        
}
