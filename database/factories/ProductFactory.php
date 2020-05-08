<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(8),
        'price' => $faker->numberBetween(100, 3000),
        'cover_img' => 'default-product-'.$faker->numberBetween(1, 5).'.jpg',
        'shop_id' => $faker->numberBetween(1, 2)
    ];
});
