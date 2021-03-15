<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
    	'store_id' => rand(1, 10),
    	'category_id' => rand(1, 5),
    	'name' => $faker->catchPhrase(),
    	'slug' => \Str::slug($faker->catchPhrase()),
    	'price' => $faker->randomNumber(),
    	'description' => $faker->paragraph(20)
    ];
});
