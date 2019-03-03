<?php

$factory->define(App\Test::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->text(50),
        "published" => 1,
    ];
});
