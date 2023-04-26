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
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            # prediction
            $table->string('winner_id')->nullable();
            $table->string('winner_name')->nullable();
            $table->string('comment')->nullable();
            $table->boolean('win_or_draw')->nullable();
            $table->string('under_over')->nullable();
            $table->string('goals_home')->nullable();
            $table->string('goals_away')->nullable();
            $table->string('advice')->nullable();
            $table->string('percent_home')->nullable();
            $table->string('percent_draw')->nullable();
            $table->string('percent_away')->nullable();
//            # league
//            $table->string('league_id')->nullable();
//            $table->string('league_name')->nullable();
//            $table->string('league_country')->nullable();
//            $table->string('league_logo')->nullable();
//            $table->string('legue_flag')->nullable();
//            $table->string('season')->nullable();
//            # teams
//            $table->string('home_team_id')->nullable();
//            $table->string('home_team_name')->nullable();
//            $table->string('home_team_logo')->nullable();
//            $table->string('home_last_form')->nullable();
//            $table->string('home_last_att')->nullable();
//            $table->string('home_last_def')->nullable();
//            $table->string('home_team_goals_for_total')->nullable();
//            $table->string('home_team_goals_for_average')->nullable();
//            $table->string('home_team_goals_against_total')->nullable();
//            $table->string('home_team_goals_against_average')->nullable();
//            $table->string('home_team_league_form')->nullable();
//            # home fixtures
//            $table->integer('home_team_league_fixtures_played_home')->nullable();
//            $table->integer('home_team_league_fixtures_played_away')->nullable();
//            $table->integer('home_team_league_fixtures_played_total')->nullable();
//            $table->integer('home_team_league_fixtures_wins_home')->nullable();
//            $table->integer('home_team_league_fixtures_wins_away')->nullable();
//            $table->integer('home_team_league_fixtures_wins_total')->nullable();
//            $table->integer('home_team_league_fixtures_draws_home')->nullable();
//            $table->integer('home_team_league_fixtures_draws_away')->nullable();
//            $table->integer('home_team_league_fixtures_draws_total')->nullable();
//            $table->integer('home_team_league_fixtures_lose_home')->nullable();
//            $table->integer('home_team_league_fixtures_lose_away')->nullable();
//            $table->integer('home_team_league_fixtures_lose_total')->nullable();
//            # home goals for
//            $table->integer('home_team_league_goals_for_total_home')->nullable();
//            $table->integer('home_team_league_goals_for_total_away')->nullable();
//            $table->integer('home_team_league_goals_for_total_total')->nullable();
//            $table->integer('home_team_league_goals_for_average_home')->nullable();
//            $table->integer('home_team_league_goals_for_average_away')->nullable();
//            $table->integer('home_team_league_goals_for_average_total')->nullable();
//            $table->integer('home_team_league_goals_for_minute_0_15')->nullable();
//            $table->string('home_team_league_goals_for_minute_0_15_prc')->nullable();
//            $table->integer('home_team_league_goals_for_minute_16_30')->nullable();
//            $table->string('home_team_league_goals_for_minute_16_30_prc')->nullable();
//            $table->integer('home_team_league_goals_for_minute_31_45')->nullable();
//            $table->string('home_team_league_goals_for_minute_31_45_prc')->nullable();
//            $table->integer('home_team_league_goals_for_minute_61_75')->nullable();
//            $table->string('home_team_league_goals_for_minute_61_75_prc')->nullable();
//            $table->integer('home_team_league_goals_for_minute_76_90')->nullable();
//            $table->string('home_team_league_goals_for_minute_71_90_prc')->nullable();
//            $table->integer('home_team_league_goals_for_minute_91_105')->nullable();
//            $table->string('home_team_league_goals_for_minute_91_105_prc')->nullable();
//            $table->integer('home_team_league_goals_for_minute_106_120')->nullable();
//            $table->string('home_team_league_goals_for_minute_106_120_prc')->nullable();
//            #home goals against
//            $table->integer('home_team_league_goals_against_total_home')->nullable();
//            $table->integer('home_team_league_goals_against_total_away')->nullable();
//            $table->integer('home_team_league_goals_against_total_total')->nullable();
//            $table->integer('home_team_league_goals_against_average_home')->nullable();
//            $table->integer('home_team_league_goals_against_average_away')->nullable();
//            $table->integer('home_team_league_goals_against_average_total')->nullable();
//            $table->integer('home_team_league_goals_against_minute_0_15')->nullable();
//            $table->string('home_team_league_goals_against_minute_0_15_prc')->nullable();
//            $table->integer('home_team_league_goals_against_minute_16_30')->nullable();
//            $table->string('home_team_league_goals_against_minute_16_30_prc')->nullable();
//            $table->integer('home_team_league_goals_against_minute_31_45')->nullable();
//            $table->string('home_team_league_goals_against_minute_31_45_prc')->nullable();
//            $table->integer('home_team_league_goals_against_minute_61_75')->nullable();
//            $table->string('home_team_league_goals_against_minute_61_75_prc')->nullable();
//            $table->integer('home_team_league_goals_against_minute_76_90')->nullable();
//            $table->string('home_team_league_goals_against_minute_71_90_prc')->nullable();
//            $table->integer('home_team_league_goals_against_minute_91_105')->nullable();
//            $table->string('home_team_league_goals_against_minute_91_105_prc')->nullable();
//            $table->integer('home_team_league_goals_against_minute_106_120')->nullable();
//            $table->string('home_team_league_goals_against_minute_106_120_prc')->nullable();
//            # biggest
//            $table->integer('home_team_league_biggest_streak_wins')->nullable();
//            $table->integer('home_team_league_biggest_streak_draws')->nullable();
//            $table->integer('home_team_league_biggest_streak_loses')->nullable();
//            $table->string('home_team_league_biggest_wins_home')->nullable();
//            $table->string('home_team_league_biggest_wins_away')->nullable();
//            $table->string('home_team_league_biggest_loses_home')->nullable();
//            $table->string('home_team_league_biggest_loses_away')->nullable();
//            $table->integer('home_team_league_biggest_goals_for_home')->nullable();
//            $table->integer('home_team_league_biggest_goals_for_away')->nullable();
//            $table->integer('home_team_league_biggest_goals_against_home')->nullable();
//            $table->integer('home_team_league_biggest_goals_against_away')->nullable();
//            # clean_sheet
//            $table->integer('home_team_league_clean_sheet_home')->nullable();
//            $table->integer('home_team_league_clean_sheet_away')->nullable();
//            $table->integer('home_team_league_clean_sheet_total')->nullable();
//            # failed to score
//            $table->integer('home_team_league_failed_to_score_home')->nullable();
//            $table->integer('home_team_league_failed_to_score_away')->nullable();
//            $table->integer('home_team_league_failed_to_score_total')->nullable();
//            # penalty
//            $table->integer('home_team_league_penalty_scored_total')->nullable();
//            $table->string('home_team_league_penalty_scored_percentage')->nullable();
//            $table->integer('home_team_league_penalty_missed_total')->nullable();
//            $table->string('home_team_league_penalty_missed_percentage')->nullable();
//            $table->integer('home_team_league_penalty_total')->nullable();
//            # home lineups
//            $table->json('home_team_league_lineups_formation')->nullable();
//            # home cards
//            $table->integer('home_team_league_cards_yellow_0_15_total')->nullable();
//            $table->string('home_team_league_cards_yellow_0_15_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_16_30_total')->nullable();
//            $table->string('home_team_league_cards_yellow_16_30_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_31_45_total')->nullable();
//            $table->string('home_team_league_cards_yellow_31_45_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_46_60_total')->nullable();
//            $table->string('home_team_league_cards_yellow_46_60_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_61_75_total')->nullable();
//            $table->string('home_team_league_cards_yellow_61_75_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_76_90_total')->nullable();
//            $table->string('home_team_league_cards_yellow_76_90_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_91_105_total')->nullable();
//            $table->string('home_team_league_cards_yellow_91_105_percentage')->nullable();
//            $table->integer('home_team_league_cards_yellow_106_120_total')->nullable();
//            $table->string('home_team_league_cards_yellow_106_120_percentage')->nullable();
//
//            $table->integer('home_team_league_cards_red_0_15_total')->nullable();
//            $table->string('home_team_league_cards_red_0_15_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_16_30_total')->nullable();
//            $table->string('home_team_league_cards_red_16_30_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_31_45_total')->nullable();
//            $table->string('home_team_league_cards_red_31_45_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_46_60_total')->nullable();
//            $table->string('home_team_league_cards_red_46_60_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_61_75_total')->nullable();
//            $table->string('home_team_league_cards_red_61_75_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_76_90_total')->nullable();
//            $table->string('home_team_league_cards_red_76_90_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_91_105_total')->nullable();
//            $table->string('home_team_league_cards_red_91_105_percentage')->nullable();
//            $table->integer('home_team_league_cards_red_106_120_total')->nullable();
//            $table->string('home_team_league_cards_red_106_120_percentage')->nullable();
//            $table->integer('home_team_league_cards_red')->nullable();
//            $table->string('home_team_league_cards_red_percentage')->nullable();





            # save
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predictions');
    }
};
