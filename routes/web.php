<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "UserController@index"); //aqui estamos llamando el contenido que esta en el controlador UserController y a la funcion index;
Route::get('/usuarios', "UserController@show")->name('users.index');  //aqui estamos llamando el contenido que esta en el controlador UserController y a la funcion index;
Route::get('/db', "UserController@db"); //aqui estamos llamando el contenido que esta en el controlador UserController y a la funcion index
Route::get('/usuarios/{id?}', "UserController@usuarios")->where('id', '[0-9]+')->name('users.show'); //con el atributo name especificamos una ruta con ROUTE() //aqui estamos llamando el contenido que esta en el controlador UserController y a la funcion index
Route::get('/usuarios2/{id?}', "UserController@usuarios2")->where('user', '[0-9]+')->name('users.show2'); //con el atributo name especificamos una ruta con ROUTE() //aqui estamos llamando el contenido que esta en el controlador UserController y a la funcion index

//$.post like jquery
//get: solicita y obtiene informacion
//post: envia y procesa informacion
Route::get('/usuarios/nuevo', 'Usercontroller@create')->name('users.create'); 
Route::post('/usuarios/crear', 'Usercontroller@store'); 