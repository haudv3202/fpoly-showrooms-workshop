<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity_log;

class Activity_logFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity_log::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Row 1' => $this->faker->text(50),
            'Row 2' => $this->faker->text(50),
            'Row 3' => $this->faker->text(50),
        ];
    }
}
