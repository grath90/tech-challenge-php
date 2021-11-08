<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LoremIpsumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lorem_paragraph' => $this->faker->paragraph(4),
            'lorem_title' => $this->faker->sentence(),
            'image_url' => $this->faker->url(),
        ];
    }
}
