<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	$lista = [
    		'uno',
    		'dos',
    		'tres',
    		'cuatro'
    	];

    	$a = "Listado";
    	return view('lista.lista', compact('lista', 'a'));
    }

    public function test($id = ""){
    	return "hola mundo soy el numero {$id}";
    }
}
