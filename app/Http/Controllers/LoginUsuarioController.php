<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUsuarioController extends Controller
{
    public function login(){
        return view('login-usuarios'); 
        
    }
}
