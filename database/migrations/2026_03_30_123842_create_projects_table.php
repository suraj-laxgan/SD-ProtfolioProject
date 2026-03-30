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
            $table->string('title');
            $table->string('slug')->unique(); 
            $table->text('description')->nullable();
            $table->unsignedBigInteger('technology_id');
            $table->string('github_link')->nullable();
            $table->string('live_url')->nullable();
            $table->string('thumbnail')->nullable(); 
            // Status: typically 'draft', 'published', or 'archived'
            $table->string('status')->default('draft');
            $table->timestamps();
            $table->foreign('technology_id')->references('id')->on('project_technologies')->constrained()->onDelete('cascade');

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
