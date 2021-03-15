<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
    	'name' => $faker->company(),
    	'slug' => \Str::slug($faker->company()),
    	'rating' => rand(1, 5)
    ];
});
