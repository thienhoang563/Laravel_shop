<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->id = 1;
        $product->name = "Quan jean nam ong bo";
        $product->desc = "Dang om skinny";
        $product->content = "Dang om sat skinny dai";
        $product->price = "400000";
        $product->quantity = 5;
        $product->image = "";
        $product->category_id = 1;
        $product->save();
    }
}
