<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->numerify('Product ###'),
        'description' => $faker->paragraph(4,true),
        'price' => $faker->randomFloat(2,10,9999),
        'barcode' => $faker->ean8,
        'stock' => $faker->numberBetween(0,99),
        'cover' => 'https://loremflickr.com/640/480/computer'
    ];
});
