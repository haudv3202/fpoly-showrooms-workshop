<?php

namespace Database\Seeders;

use App\Models\Technical_project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicalProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technical_project::factory(100)->create();
    }
}
