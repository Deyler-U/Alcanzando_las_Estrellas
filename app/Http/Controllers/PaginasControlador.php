<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasControlador extends Controller
{
    //
    public function inicio(){
    	return view('index');
    }

    public function registrodonacion(){
    	return view('formularioregistro');
    }    
}
