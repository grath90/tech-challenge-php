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
      $section_ids = ['home', 'contact', 'box'];
        return [
            'lorem_paragraph' => $this->faker->paragraph(4),
            'lorem_title' => $this->faker->sentence(),
            'image_url' => $this->faker->url(),
            'section_id' => $this->faker->randomElement($section_ids),
        ];
    }
}
