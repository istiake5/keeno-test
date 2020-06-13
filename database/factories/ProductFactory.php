<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use PhpParser\Node\Expr\Cast\Double;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence,
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'price' => $faker->randomNumber($nbDigits = 3, $strict = true),
        'is_featured' => $faker->boolean($chanceOfGettingTrue = 90),
        'images_url' => $faker->image('public/images/product', 640, 420, null, false),
        'rating'   => mt_rand(1, 5)
    ];
});
