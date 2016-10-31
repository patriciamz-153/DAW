<?php

use Illuminate\Database\Seeder;
use App\Category as Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(['name'=>'Cocina']);
        Category::create(['name'=>'Manualidades']);
        Category::create(['name'=>'Art Nails']);
        Category::create(['name'=>'Scrapbook']);
        Category::create(['name'=>'Macrame']);
    }
}
