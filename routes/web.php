<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutasContoller;
use App\Http\Controllers\LoginUsuarioController;
use App\Http\Controllers\RegistroProductosController;
use App\Http\Controllers\SucursalesController;

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
//rutas match

Route::match(['get','post'],'/hola-mundo', function(){
    return "hello word";

});



/* Route::get('/frutas/listado', function(){
     return view('frutas-listado')
     ->with('frutas', array('Naranja','Pera','Manzana','Frutillas'));
}); */
Route::get('/frutas/listado',[FrutasContoller::class,'index']);
Route::get('/frutas/agregar',[
    'uses' => 'App\Http\Controllers\FrutasContoller@agregar',
    'as' => 'agregarfruta'
]);
Route::post('/frutas/guardar',[
    'uses' => 'App\Http\Controllers\FrutasContoller@guardar',
    'as' => 'agregarfruta'
]);









Route::get('/sucursales/tienda',[SucursalesController::class,'index']);

Route::get('/login/usuario', [LoginUsuarioController::class,'index']);

Route::get('/registro/productos', [RegistroProductosController::class, 'index']);