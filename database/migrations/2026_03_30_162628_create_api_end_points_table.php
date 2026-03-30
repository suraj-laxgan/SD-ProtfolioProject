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
        Schema::create('api_end_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('api_doc_id')->constrained('api_docs')->onDelete('cascade');
            $table->string('title'); // e.g., "Create User"
            $table->string('method'); // e.g., "GET", "POST", "PUT", "DELETE"
            $table->string('endpoint'); // e.g., "/users"
            $table->text('description')->nullable();
            $table->json('request_body')->nullable(); 
            $table->json('response_body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_end_points');
    }
};
