<?php

use Illuminate\Database\Seeder;
use App\Category

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Quan";
        $category->slug = "quan";
        $category->desc = "";
        $category->image = "";
        $category->save();

        $category = new Category();
        $category->name = "Ao";
        $category->slug = "ao";
        $category->desc = "";
        $category->image = "";
        $category->save();




    }
}
