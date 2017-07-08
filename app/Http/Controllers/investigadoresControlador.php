<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\linea_investigacion;
use App\investigador;
use App\tipo_investigador;
use App\linea_investigador;


class investigadoresControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigadores = investigador::orderBy('id', 'ASC')->paginate(5);
        $lineas         = linea_investigacion::all();
        $lineas_investigadores = linea_investigador::all();
        $tipos_investigadores = tipo_investigador::all();
        //dd($lineas);
        
        return view('admin.investigadores.consultaInvestigadores', ['investigadores' => $investigadores, 'lineas' => $lineas, 'lineas_investigadores' => $lineas_investigadores, 'tipos_investigadores' => $tipos_investigadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineas = linea_investigacion::all();
        $tipos = tipo_investigador::all();

        return view('admin.investigadores.crearInvestigadores', ['lineas' => $lineas, 'tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $investigadores        = new investigador($request->all());
        $lineas = linea_investigacion::find(request());
        $linea_investigador  = new linea_investigador($request->all());
        $investigadores->save();
        $linea_investigador['investigador_id'] = $investigadores['id'];
        
        foreach ($lineas as $linea) {
            $linea_investigador['linea_investigacion_id'] = $linea['id'];
        }
        
        $linea_investigador->save();
        //dd($linea_investigador);

        flash('Registro exitoso')->success();

        return redirect()->route('investigadores.index'); 
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
        $investigadores        = investigador::find($id);
        $lineas                = linea_investigacion::all();
        $lineas_investigadores = linea_investigador::all();
        $tipos_investigadores  = tipo_investigador::all();

        return view('admin.investigadores.editarInvestigador', ['investigadores' => $investigadores, 'lineas' => $lineas, 'lineas_investigadores' => $lineas_investigadores, 'tipos_investigadores' => $tipos_investigadores]);
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
        $investigador = investigador::find($id);
        $investigador->delete();

        flash('El investigador '. $investigador->nombre . $investigador->apellido . ' ha sido eliminado exitosamente')->error();
        return redirect()->route('investigadores.index');
    }
}
