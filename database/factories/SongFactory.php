<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'title' => $this->faker->words(3, true),
                'artist'=> $this->faker->name(),
                'chordsKnowledge'=> $this->faker->numberBetween(0,5),
                'rythmKnowledge'=> $this->faker->numberBetween(0,5),
                'globalKnowledge'=> $this->faker->numberBetween(0,5),
                'tabs'=> $this->faker->url(),
                'link'=> $this->faker->url(),
        ];
    }
}
