<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductCategories;
use Faker\Generator as Faker;

$factory->define(ProductCategories::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1, 50),
        'category_id' => $faker->numberBetween(3, 29)
    ];
});
