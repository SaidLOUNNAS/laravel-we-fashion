<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Category;
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
    Category::create([
        'name'=>'men',
      ]);

    Category::create([
        'name'=>'women',
      ]);

    //   create 80 products
    Product::factory()->count(30)->create()->each(function($product){

        $product->save();

      });

    }
}
