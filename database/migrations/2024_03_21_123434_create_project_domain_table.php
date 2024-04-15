<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_domains', function (Blueprint $table) {
            $table->foreignIdFor(Project::class)->constrained()->index('fk_projectDomain_project');
            $table->foreignIdFor(\App\Models\Domain::class)->constrained()->index('fk_projectDomain_domain');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_domain');
    }
};
