<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Level;
use App\Models\User;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $levels = Level::all();
        $users = User::all();

        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(100),
            'deploy_link' => $this->faker->url,
            'level_id' => $levels->random()->id,
            'added_by' => $users->random()->id,
            'is_highlight' => $this->faker->boolean,
            'views' => $this->faker->numberBetween(100, 1000),
            'is_active' => $this->faker->boolean,
        ];
    }
}
