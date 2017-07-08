<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\investigador;
use App\linea_investigacion;
use App\linea_investigador;
use App\linea_coordinador;

class coordinadoresControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $lineas = linea_investigacion::all();

        
        return view('admin.coordinadores.crearCoordinadores', ['lineas' => $lineas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coordinador = new investigador($request->all());
        $lineas = linea_investigacion::find(request());
        $coordinadorDatos  = investigador::all();
        $linea_coordinador =  new linea_coordinador($request->all());

        

        foreach ($coordinadorDatos as $coordinadorDato) {
            foreach ($lineas as $linea) {
                   $linea_coordinador['linea_investigacion_id'] = $linea['id'];
                
                if ($coordinadorDato['cedula'] == $coordinador['cedula']) {
                    $linea_coordinador['investigador_id'] = $coordinadorDato['id'];            
                    
                }else{
                    echo "No se encuentra registrado el investigador";
                }
            }

        }
        $linea_coordinador->save();
        
        //dd($linea_coordinador['investigador_id'] = $coordinador['id']);
      
        
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
