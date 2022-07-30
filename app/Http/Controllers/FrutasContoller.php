<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasContoller extends Controller
{
    public function index(){
        return view('frutas-listado')
        ->with('frutas', array('Naranja','Pera','Manzana','Frutillas'));
    }
    public function agregar(){
        return view('frutas-agregar');
    }
    public function guardar(Request $request){
        //dd($request);
        $this->validate($request,[
            'nombre' => 'required|min:3',
            'precio' => 'integer'

        ]);

        return "Producto: ". $request->input('nombre');
         
    }
    
}

