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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->string('title');
            $table->enum('game_type', ['CS:GO', 'DOTA2', 'Valorant']);
            $table->string('stage');
            $table->decimal('prize_pool', 8, 2);
            $table->boolean('is_live')->default(false);
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
