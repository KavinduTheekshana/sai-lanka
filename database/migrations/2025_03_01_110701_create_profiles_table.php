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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('profile_name');
            $table->string('email')->unique();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->date('birthday')->nullable();
            $table->string('occupation')->nullable();
            $table->string('status')->nullable();
            $table->string('birthplace')->nullable();
            $table->text('favourite_tv_shows')->nullable();
            $table->text('favourite_music')->nullable();
            $table->text('favourite_movies')->nullable();
            $table->text('favourite_games')->nullable();
            $table->string('job_title')->nullable();
            $table->integer('job_year_started')->nullable();
            $table->integer('job_year_end')->nullable();
            $table->text('job_description')->nullable();
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
