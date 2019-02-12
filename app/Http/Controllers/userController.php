<?php

namespace App\Http\Controllers;

use App\User; //podemos usar esto para definir los datos de mejor forma abajo
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(){
		return 'hola mundo';
	}
    public function show(){
        //$users = DB::table('users')->get(); //para traer los datos
        $users = User::all()->sortBy('email'); //para traer los datos

        //dd($users);

    	$lista = [
    		'uno',
    		'dos',
    		'tres',
    		'cuatro'
    	];

    	$a = "Listado";
    	//return view('lista.lista', compact('lista', 'a'));
    	return view('lista.lista', compact('lista', 'a', 'users'));
    }

    public function db(){
		return 'asdasd';
		
	} 
	
	public function usuarios($id=null){

		$user = User::find($id);
		// $user = User::findOrFail($id);
		// dd($user);
		exit('linea no encontrada');

		if($user==null){
			// return 'errors.404';
			response()->view('welcome', [], 404); //esto llama a una pagina con status 404 en este caso no le pasamos parametros en []
		} 
		
        return 'hellow world';
	}
	
	public function usuarios2(User $user){ //tambien podemos usar User $user como parametros y sirve igual
		dd($user);
		
        return 'hellow world';
	}


	//for post
	public function create(){
		return view('crear');
	}

	public function store(){
		
		// return redirect('usuarios/nuevo')->withInput(); //withInput sirve para que se queden los valores al redireccionar la pagina

		// $data = request()->all(); //getting all data

		// if(empty($data['name'])){
		// 	return redirect('usuarios/nuevo')->withErrors([
		// 		'name' => 'el campo nombre esta vacio' //aqui mandamos el mensaje de error
		// 	]);
		// }
		$data = request()->validate([
			'name' => 'required'
		], [
			'name.required' => 'El campo nombre es obligatorio'
		]);

		User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password'])
		]);
		return redirect()->route('users.index');
		// return 'Procesando informacion';
	}
}
