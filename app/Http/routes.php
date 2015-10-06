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
    return view('welcome');

    //return "Hola, petición procesada te saluda.";
Route::get('Eventos','Eventoscontroller');
=======
    //return "ando haciendo pŕuebas maldito cholo no mentiras te amo chiquilla.";

>>>>>>> 7e43aac51173918fd306cd80c9d2521701f7740d
});
