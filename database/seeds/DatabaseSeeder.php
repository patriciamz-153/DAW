<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//llama a los seerders creados
    	$this->call(UsersTableSeeder::class);
    	$this->call(CategoriesTableSeeder::class);
    	$this->call(PostsTableSeeder::class);
    }
}
