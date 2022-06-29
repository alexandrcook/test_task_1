<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client' => $this->faker->company,
            'product' => $this->faker->word,
            'total' => $this->faker->numberBetween(99, 3999),
            'date' => $this->faker->date
        ];
    }
}
