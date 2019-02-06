<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "UserController@index"); //aqui estamos llamando el contenido que esta en el controlador UserController y a la funcion index

Route::get('/test2', function(){
	return "listo";
});

Route::get('/test/{id?}', "UserController@test")->where('id', '[0-9]+');

Route::get('/lista', "listaController"); //aqui estamos usando un solo public por tanto podemos usar __invoke para decir que se ejecute solo la clase

