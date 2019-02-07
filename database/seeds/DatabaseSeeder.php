<?php

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
        DB::table('users', 'professions')->truncate(); //borrar los datos de las tablas
    }

    public function run()
    {
       // dd('ProfessionSeeder');
      
       $this->clean();

       DB::table('professions')->insert([
           'title' => 'test1',

       ]);

        //$this->call(ProfessionSeeder::class);
    }
}
