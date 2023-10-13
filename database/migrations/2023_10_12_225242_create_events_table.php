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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_home_id')->constrained('teams')->unique();
            $table->foreignId('team_guest_id')->constrained('teams')->unique();
            $table->integer('score_home')->default(0);
            $table->integer('score_guest')->default(0);
            $table->string('location');
            $table->string('group');
            $table->dateTime('start');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
