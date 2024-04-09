<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Layout>
 */
class LayoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'col'=>rand(0,3),
            'name'=>fake()->name(),
            'address1'=>fake()->address(),
            'address2'=>fake()->address(),
            'numberPhone'=>fake()->phoneNumber(),
        ];
    }
}
