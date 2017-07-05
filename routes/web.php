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
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::resource('usuarios', 'usuariosControlador');

	Route::resource('lineas', 'lineasControlador');

	Route::resource('proyectos', 'proyectosControlador');

	Route::resource('investigadores', 'investigadoresControlador');

	Route::resource('coordinadores', 'coordinadoresControlador');

	//Route::resource('sesion', 'loginControlador');

	//ruta tipo get.  envia el id del proyecto para ser eliminado con el metodo destry. 'uses' es para definir que controlador usara y seguido de @destroy que se refiere al metodo que esta dentro del controlador.  'as' es para definir la direccion de la vista
	Route::get('investigadores/{id}/destroy', [
		'uses' => 'investigadoresControlador@destroy',
		'as'   => 'admin.investigadores.destroy'
	]);

	Route::get('lineas/{id}/destroy', [
		'uses' => 'lineasControlador@destroy',
		'as'   => 'admin.lineas.destroy'
	]);

	Route::get('proyectos/{id}/destroy', [
		'uses' => 'proyectosControlador@destroy',
		'as'   => 'admin.proyectos.destroy'
	]);

});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
