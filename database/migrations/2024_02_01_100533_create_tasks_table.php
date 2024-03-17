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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('job_title');
            $table->string('location');
            $table->string('job_region');
            $table->string('job_type');
            $table->text('job_description');
            $table->string('company_name');
            $table->string('company_tagline')->nullable();
            $table->text('company_description')->nullable();
            $table->string('company_website')->nullable();
            $table->string('facebook_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('linkedin_username')->nullable();
            $table->string('featured_image')->nullable(); // Champ pour l'image en vedette
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
