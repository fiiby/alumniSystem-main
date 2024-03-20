<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('graduation_year');
            $table->text('bio')->nullable();
            $table->string('profile_picture')->nullable();

            // Additional fields for skills
            $table->string('skill_name')->nullable();
            $table->enum('proficiency_level', ['beginner', 'intermediate', 'advanced'])->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('certifications')->nullable();

            // Additional fields for profile
            $table->text('academic_achievements')->nullable();
            $table->text('work_experience')->nullable();
            $table->text('projects')->nullable();
            $table->text('additional_info')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alums');
    }
}
