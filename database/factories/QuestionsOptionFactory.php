<?php

$factory->define(App\QuestionsOption::class, function (Faker\Generator $faker) {
    return [
        'option_text' => $faker->text(50) . '?',
        'correct' => rand(0, 1),
    ];
});
