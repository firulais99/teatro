<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view ('welcome');

    //return "Hola, petición procesada te saluda.";
//Route::get('Eventos','Eventoscontroller');
//<<<<<<< HEAD
    //return "ando haciendo pŕuebas maldito cholo no mentiras te amo chiquilla.";
//Route::get('ventas/', 'VentasController@index');
//=======//
//=======
    //return "ando haciendo pŕuebas maldito cholo no mentiras te amo chiquilla.";

//>>>>>>> 7e43aac51173918fd306cd80c9d2521701f7740d
//>>>>>>> 554eea1afd186ff0bc0a99c7cf6970436a67b88d
});

Route::get('/eventos', 'VentasController@index');
Route::get('/evento/{id_evento}', 'VentasController@verEvento');
Route::get('/reservar/{id_evento}', 'VentasController@reservarAsientos');
Route::post('/escenario', 'VentanasController@generarEscenario');
// Route::get('datos', 'VentasController@insercionesDatos');
