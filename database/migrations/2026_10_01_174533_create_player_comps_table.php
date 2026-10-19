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
        Schema::create('player_comps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('goals');
            $table->integer('assists');
            $table->integer('cleanSheets');
            $table->float('rating');

            $table->foreignId('player_id')->unique()->constrained();
            $table->foreignId('allComp_id')->unique()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_comps');
    }
};
