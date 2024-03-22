<?php

namespace Database\Seeders;

use App\Models\Project_domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project_domain::factory(100)->create();
    }
}
