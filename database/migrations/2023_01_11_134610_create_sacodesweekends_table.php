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
        Schema::create('sacodesweekends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contributor_id')->constrained()->onDelete('cascade');
            $table->string('topic');
            $table->longText('description');
            $table->string('poster');
            $table->date('date');
            $table->time('time');
            $table->enum('status', ['active', 'trash']);
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
        Schema::dropIfExists('sacodesweekends');
    }
};
