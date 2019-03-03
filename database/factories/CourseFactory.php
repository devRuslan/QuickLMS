<?php

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    return [
        "title" => $name,
        "slug" => str_slug($name),
        "description" => $faker->text(),
        "price" => $faker->randomFloat(2,0,199),
        "start_date" => $faker->date("Y-m-d", $max = 'now'),
        "published" => 1,
    ];
});
