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

//Rutas de Prueba
Route::get('/', function () {
    // return view('welcome');
    return '<h1>Hola mundo con Laravel</h1>';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba/{nombre?}', function($nombre) {
    $texto = "<h2>Texto desde una ruta </h2>";
    $texto .= "Nombre: ".$nombre;
    return view('pruebas', array(
        'texto' => $texto
    ));
});

Route::get('/animales', 'PruebasController@index');

Route::get('/probando','PruebasController@testOrm');

//RUTAS DEL API

    /*Metodos HTTP comunes
        *GET Conseguir datos o recursos
        *POST Guardar datos o recursos o hacer logica
        *PUT Actualizar datos
        *DELETE Eliminar datos
    */ 

    //Rutas de prueba
    Route::get('/post','PostController@pruebas');
    Route::get('/category','CategoryController@pruebas');
    Route::get('/user','UserController@pruebas');

    // Rutas del controlador de usuario
    Route::post('/api/register','UserController@register');
    Route::post('/api/login','UserController@login');