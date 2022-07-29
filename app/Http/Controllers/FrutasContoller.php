<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasContoller extends Controller
{
    public function index(){
        return view('frutas-listado')
        ->with('frutas', array('Naranja','Pera','Manzana','Frutillas'));
    }
}
