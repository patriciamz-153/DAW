<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //bcrypt -> el parametro que se manda a la funcion, lo encripta con un hash 
        //str_random -> devuelve cadenas aleatorias
        
        //Inserta un registro a la tabla Users

        /*DB::table('users') ->insert([
        	'name' => str_random(10), 
        	'username' => str_random(10),
        	'email' => str_random(10).'@gmail.com', 
        	'password' => bcrypt('secret')
        	]);*/
    	
		//Cuando se usa ModelFactory para llenar las tablas
		//primer parametro: modelo a usar
		//segundo parametro. la cantidad de registros a generar
    	factory(App\User::class,1) ->create();
    }
}
