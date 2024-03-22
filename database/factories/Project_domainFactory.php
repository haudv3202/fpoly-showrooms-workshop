<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project_domain;
use App\Models\Project;
use App\Models\Domain;

class Project_domainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project_domain::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projects = Project::all();
        $domains = Domain::all();

        return [
            'project_id' => $projects->random()->id,
            'subject_id' => $domains->random()->id,
        ];
    }
}
