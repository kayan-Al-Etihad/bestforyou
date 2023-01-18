<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use App\Models\Product;
use App\Models\product_category;
use Faker\Generator as Faker;

$factory->define(product_category::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1,10),
        'product_id' => $faker->numberBetween(1,10),
    ];
});
