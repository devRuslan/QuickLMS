<?php

use Illuminate\Database\Seeder;
use App\QuestionsOption;
use App\Question;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Question::class, 50)->create()->each(function ($question) {
            $question->options()->saveMany(factory(QuestionsOption::class, 4)->create());
            $question->tests()->attach(rand(1, 50));
        });
    }
}
