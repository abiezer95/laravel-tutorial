<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaController extends Controller
{
    public function __invoke(){
    	$lista = [
    		'uno',
    		'dos',
    		'tres',
    		'cuatro',
    	];
   		
   		$a = 'Listado';
    	// return view('lista', ['lista'=>$lista, 'a'=>$a]); //para pasar variables a view hay dos formas esta y esa de abajo 
    	// return view('lista')
    	// 	->with('lista', $lista)
    	// 	->with('a', 'Listado'); 
    	//y esta
    	// dd(compact('lista', 'a')); //esto es para ver la forma del array similar a un print_r
    	return view('lista.lista', compact('lista', 'a')); //compact devuelve un array asociativo
    }
}
