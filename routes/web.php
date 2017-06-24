<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function (){
	return view('login');
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('usuarios', 'usuariosControlador');

	Route::resource('lineas', 'lineasControlador');

	Route::resource('proyectos', 'proyectosControlador');

	Route::resource('investigadores', 'investigadoresControlador');

	Route::resource('consultasLineas', 'consultasLineasControlador');

	Route::resource('consultasProyectos', 'consultasProyectosControlador');

	Route::resource('consultasInvestigadores', 'consultasInvestigadoresControlador');

	Route::resource('consultasCoordinadores', 'consultasCoordinadoresControlador');

	Route::resource('consultasProyectosInvestigadores', 'consultasProyectosInvestigadoresControlador');


});




