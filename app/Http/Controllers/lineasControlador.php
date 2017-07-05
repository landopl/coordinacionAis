<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\linea_investigacion;
use Laracasts\Flash\Flash;

class lineasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineas = linea_investigacion::orderBy('id', 'ASC')->paginate(5);
        return view('admin.lineas.consultaLineas')->with('lineas', $lineas);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lineas.crearLinea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $lineas= new linea_investigacion($request->all());
        $lineas->save();

        flash('Registro exitoso')->success();

        return redirect()->route('lineas.index');
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
        $lineas = linea_investigacion::find($id);

        return view('admin.lineas.editar')->with('lineas', $lineas);
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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lineas = linea_investigacion::find($id);
        $lineas->delete();

        flash('La linea de investigacion <strong>'. $lineas->denominacion . '</strong> ha sido eliminado exitosamente')->error();
        return redirect()->route('lineas.index');
    }
}
