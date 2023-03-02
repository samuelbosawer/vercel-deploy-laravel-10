<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributors', function (Blueprint $table) {
            $table->id();
            // personal info
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->longText('about')->nullable();
            $table->string('profile_picture')->nullable();

            // profesional info
            $table->string('job_title')->nullable();
            $table->string('company')->nullable();

            // contact
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('website')->nullable();

            // social media
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('github')->nullable();

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
        Schema::dropIfExists('contributors');
    }
};
