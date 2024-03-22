<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('technical_projects', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Project::class)->constrained()->index('fk_technicalProject_project');
            $table->foreignIdFor(\App\Models\Technical::class)->constrained()->index('fk_technicalProject_technical');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_project');
    }
};
