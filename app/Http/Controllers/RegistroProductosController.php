<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroProductosController extends Controller
{
    public function index(){
        return view('stock-registro'); 
        
    }
}
