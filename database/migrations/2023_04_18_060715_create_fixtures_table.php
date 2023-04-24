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
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->string('fx_id');
            $table->string('referee')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('time')->nullable();
            $table->string('first')->nullable();
            $table->string('second')->nullable();
            $table->string('venue_id')->nullable();
            $table->string('venue_name')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->nullable();
            # league
            $table->string('league_id')->nullable();
            $table->string('league_name')->nullable();
            $table->string('league_country')->nullable();
            $table->string('league_logo')->nullable();
            $table->string('league_flag')->nullable();
            $table->string('league_season')->nullable();
            $table->string('league_round')->nullable();
            # teams
            $table->string('home_team_id')->nullable();
            $table->string('home_team_name')->nullable();
            $table->string('home_team_logo')->nullable();
            $table->boolean('home_winner')->nullable();
            $table->string('away_team_id')->nullable();
            $table->string('away_team_name')->nullable();
            $table->string('away_team_logo')->nullable();
            $table->boolean('away_winner')->nullable();
            # goals
            $table->string('home_team_goals')->nullable();
            $table->string('away_team_goals')->nullable();
            # score
            $table->string('home_team_halftime_score')->nullable();
            $table->string('away_team_halftime_score')->nullable();
            $table->string('home_team_fulltime_score')->nullable();
            $table->string('away_team_fulltime_score')->nullable();
            $table->string('home_team_extratime_score')->nullable();
            $table->string('away_team_extratime_score')->nullable();
            $table->string('home_team_penalty')->nullable();
            $table->string('away_team_penalty')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixtures');
    }
};
