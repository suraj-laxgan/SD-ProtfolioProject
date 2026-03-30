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
        Schema::create('visitors', function (Blueprint $table) {
           $table->id();
            $table->ipAddress('ip_address')->index();
            $table->string('country')->nullable();
            $table->string('device')->nullable(); // e.g., Mobile, Desktop, Tablet
            $table->string('browser')->nullable(); // e.g., Chrome, Firefox, Safari
            // The URL or route name they visited
            $table->string('visited_page')->index(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
