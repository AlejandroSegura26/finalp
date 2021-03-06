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
//Rutas para un usuario no autenticado
Route::group(['middleware' => ['guest']], function () {
    //Ruta para mostrar el formulario para iniciar sesion
    Route::get('/','Auth\LoginController@showLoginForm');
    //Ruta para iniciar sesion
    Route::post('/login','Auth\LoginController@login')->name('login');
});
//Rutas para un usuario autenticado
Route::group(['middleware' => ['auth']], function () {
    //Rutas para el usuario 'Administrador'
    Route::group(['middleware' => ['Administrador']], function () {
        //Rutas para ver y listar roles
        Route::get('/rol','RolController@index');
        Route::get('/rol/selectRol','RolController@selectRol');
        //Rutas para ver, agregar, actualizar, listar y activar/desactivar usuarios
        Route::get('/usuario','UserController@index');
        Route::post('/usuario/registrar','UserController@store');
        Route::put('/usuario/actualizar','UserController@update');
        Route::put('/usuario/desactivar','UserController@desactivar');
        Route::put('/usuario/activar','UserController@activar');
      //futas para proyectos
        Route::get('/usuario/selectCliente','UserController@selectCliente');
        Route::get('/usuario/selectManager','UserController@selectManager');
        Route::get('/proyecto','ProyectoController@index');
        Route::put('/proyecto/actualizar','ProyectoController@update');
        Route::put('/proyecto/desactivar','ProyectoController@desactivar');
        Route::post('/proyecto/registrar','ProyectoController@store');
      
    });
    //Rutas para el usuario 'Director de Proyecto'
    Route::group(['middleware' => ['DirectorProyecto']], function () {

    });
    //Rutas para el usuario 'Programador'
    Route::group(['middleware' => ['Programdor']], function () {

    });
    //Rutas para el usuario 'Cliente'
    Route::group(['middleware' => ['Cliente']], function () {

    });
    //Contenido principal
    Route::get('/principal', function () {
        return view('contenido/contenido');
    })->name('principal');
    //Ruta para cerrar sesion
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

