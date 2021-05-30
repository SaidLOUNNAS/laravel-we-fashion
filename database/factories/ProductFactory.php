<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


    $factory->define(App\Product::class, function (Faker $faker) {

        // upload pictures

        $category_id=$faker->numberBetween(1,3);
        if($category_id===1){
            // men
          $image=$faker->numberBetween(1,10).'.jpg';
        }elseif($category_id===2){
            // women
          $image=$faker->numberBetween(11,20).'.jpg';
        }
        $state=$faker->randomElement(['solde','standard']);
        if($state==="solde"){
          $productState="solde";
        }else{
          $productState="standard";
        }

        // faker data

        return [
          'name'=>$faker->word,
          'description'=>$faker->sentence(),
          'price'=>$faker->randomFloat(3, 150, 500) ,
          'size'=>$faker->randomElement(['xl','xs','L','M']),

          'is_visible'=>1,

          'image' => $image,

          'state'=>$productState,

          'reference'=>Str::random(16),

          'category_id'=>$category_id,


        ];


      });
