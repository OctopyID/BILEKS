<?php

namespace Database\Factories;

use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    protected $model = Word::class;

    /**
     * @return array
     */
    public function definition() : array
    {
        $word = fake()->unique()->word();

        return [
            'word'      => $word,
            'syllable' => $word,
            'meaning'   => $this->faker->word(),
        ];
    }
}
