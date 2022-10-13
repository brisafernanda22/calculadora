<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function __invoke(){
        return view('menu');
    }
   
    public function suma(){
        
        return view('operaciones.suma');
    }

    public function multiplicacion(){
        return view('operaciones.multiplicacion');
    }

    public function exponente(){
        return view('operaciones.exponente');
    }

    public function salir(){
        return view('operaciones.salir');
    }
}
