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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('deploy_link')->nullable();
            $table->foreignIdFor(\App\Models\Level::class)->constrained()->index('fk_project_level');
            $table->foreignIdFor(\App\Models\User::class)->constrained()->index('fk_project_user');
            $table->boolean('is_highlight')->default(true);
            $table->integer('views')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
