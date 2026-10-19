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
        Schema::create('all_comps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('wins');
            $table->integer('draws');
            $table->integer('draws');
            
            $table->foreignId('season_id')->unique()->constrained();
            $table->foreignId('comp_id')->unique()->constrained();
            $table->foreignId('team_id')->unique()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_comps');
    }
};
