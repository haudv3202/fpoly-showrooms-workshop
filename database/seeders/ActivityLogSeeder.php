<?php

namespace Database\Seeders;

use App\Models\Activity_log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity_log::factory(50)->create();
    }
}
