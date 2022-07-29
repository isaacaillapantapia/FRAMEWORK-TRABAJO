<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutasContoller;

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


Route::get('/contacto/{nombre?}/{edad?}', function($nombre="isaac", $edad=28){
    return view('contacto')
    ->with('nombre', $nombre)
    ->with('edad', $edad);
}) ->where([
    'nombre'=> '[A-Za-z]+', //validaciones sencillas
    'edad' => '[0-9]+'   //validaciones sencillas
]);


/* Route::get('/frutas/listado', function(){
     return view('frutas-listado')
     ->with('frutas', array('Naranja','Pera','Manzana','Frutillas'));
}); */


Route::get('/frutas/listado',[FrutasContoller::class,'index']);


