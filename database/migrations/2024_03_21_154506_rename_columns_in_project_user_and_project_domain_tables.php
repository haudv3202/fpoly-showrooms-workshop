<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInProjectUserAndProjectDomainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_users', function (Blueprint $table) {
            $table->renameColumn('user_id', 'author_id');
        });

        Schema::table('project_domains', function (Blueprint $table) {
            $table->renameColumn('domain_id', 'subject_id');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('user_id', 'added_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_user', function (Blueprint $table) {
            $table->renameColumn('author_id', 'user_id');
        });

        Schema::table('project_domain', function (Blueprint $table) {
            $table->renameColumn('subject_id', 'domain_id');
        });
    }
}
