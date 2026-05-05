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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('age')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zipCode')->nullable();
            $table->tinyInteger('total_experience')->unsigned()->default(6);
            $table->tinyInteger('project_completed')->unsigned()->default(5);
            $table->tinyInteger('happy_client')->unsigned()->default(1);

            $table->text('about_header')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->text('about_description')->nullable();
            $table->string('about_image')->nullable();

            $table->text('resume_header')->nullable();
            $table->text('exp_header')->nullable();
            $table->text('edu_header')->nullable();
            $table->text('protfolio_header')->nullable();
            $table->text('service_header')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_sub_title')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_sub_title')->nullable();
            $table->string('contact_address')->nullable();

            // Social & Professional URLs
            $table->string('github_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('upwork_url')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
