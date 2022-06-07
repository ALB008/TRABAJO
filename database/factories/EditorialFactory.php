<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Editorial;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Editorial>
 */
class EditorialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_edit' => $this->faker->word(),
            'ciud_edit' => $this->faker->country(),
            'direc_edit' => $this->faker->address(),
            'tel_edit' => $this->faker->phoneNumber(),
        ];
    }
}
