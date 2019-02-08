<?php

use \App\Profession; //archivo profession del model que cree
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function clean(){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //Quitando revicion de foreign keys para poder borrar los datos
        DB::table('professions', 'users')->truncate(); //borrar los datos de las tablas
    }

    public function run()
    {
    // dd('ProfessionSeeder');
    
    $this->clean();
    
    //DB::insert("INSERT into professions(title) values(:title)", ['title'=>'hola mundo']); //

    Profession::Create([
        'title' => 'backend-developer'
        ]);
//dos formas
    \App\Profession::Create([
            'title' => 'backend-developer'
        ]); // esto es mas dinamico, usamos el model de laravel para agregar contenido dinamicamente
    
    //DB::table('professions')->insert([;
        //'title' => 'test1'
    //]);

    //$val = DB::select("SELECT title from professions where title = ?", ['test1']); //se usa un marcador ? para prevenir ataques de inyeccion
    //$val = DB::table('professions')->select('id')->take(1)->get(); //the same as select 
    //$val = DB::table('professions')->where('title', 'test1')->value('id'); //the same as up 
    $val = DB::table('professions')->whereTitle('test1')->value('id'); //the same as up pero con whereTitle donde title es el campo  
    dd($val);
    //dd($val->first()->id);
    DB::table('users')->insert([
        'name' => 'abiezer',
        'email' => 'a@a.com',
        'password' => bcrypt('secret'),
        'profession_id' => $val
    ]);

        //$this->call(ProfessionSeeder::class);
    }
}
