<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //  create categories for men and women
     \App\Models\Category::create([
        'name'=>'men',

      ]);

      \App\Models\Category::create([
        'name'=>'women',
      ]);

    //   create 80 products
      \App\Models\Product::factory()->count(30)->create()->each(function($produit){

        $produit->save();

      });

    }
}
