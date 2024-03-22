<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Images;
use App\Models\Project;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Images::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $projects = Project::all();

        return [
            'image' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(['jpg', 'png', 'gif']),
            'project_id' => $projects->random()->id,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

