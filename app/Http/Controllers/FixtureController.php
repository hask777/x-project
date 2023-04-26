<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class FixtureController extends Controller
{
    public function fixtures()
    {
        $date = date("Y-m-d");
//        $events = DB::table('fixtures')->orderBy('league_country')->get();

        $events= DB::table('fixtures')
            ->get();

        $epl = DB::table('fixtures')->where('league_id', '39')->get();
        $la_liga = DB::table('fixtures')->where('league_id', '140')->get();
        dump($la_liga);



        return view('table', ['events' => $events]);
    }

    public function store(Request $request)
    {
        $date = date('Y-m-d');
        $response = Http::withHeaders([
            'x-rapidapi-host'=> "v3.football.api-sports.io",
            'x-rapidapi-key' => "36a1d18a201d5278d717bedb071fd142"
        ])->get('https://v3.football.api-sports.io/fixtures', [
            'date' => $date,
        ])->json()['response'];


        foreach ($response as $event)
        {
            $fixture = new Fixture();
            $fixture->fx_id = $event['fixture']['id'];
            $fixture->referee = $event['fixture']['referee'];
            $fixture->date = $event['fixture']['date'];
            $fixture->time = $event['fixture']['timestamp'];
            $fixture->first = $event['fixture']['periods']['first'];
            $fixture->second = $event['fixture']['periods']['second'];
            $fixture->venue_id = $event['fixture']['venue']['id'];
            $fixture->venue_name = $event['fixture']['venue']['name'];
            $fixture->city = $event['fixture']['venue']['city'];
            $fixture->status = $event['fixture']['status']['long'];
            # league
            $fixture->league_id = $event['league']['id'];
            $fixture->league_name = $event['league']['name'];
            $fixture->league_country = $event['league']['country'];
            $fixture->league_logo = $event['league']['logo'];
            $fixture->league_flag = $event['league']['flag'];
            $fixture->league_season = $event['league']['season'];
            $fixture->league_round = $event['league']['round'];
            # teams
            $fixture->home_team_id = $event['teams']['home']['id'];
            $fixture->home_team_name = $event['teams']['home']['name'];
            $fixture->home_team_logo = $event['teams']['home']['logo'];
            $fixture->home_winner = $event['teams']['home']['winner'];
            $fixture->away_team_id = $event['teams']['away']['id'];
            $fixture->away_team_name = $event['teams']['away']['name'];
            $fixture->away_team_logo = $event['teams']['away']['logo'];
            $fixture->away_winner = $event['teams']['away']['winner'];
            #goals
            $fixture->home_team_goals = $event['goals']['home'];
            $fixture->away_team_goals = $event['goals']['away'];
            # score
            $fixture->home_team_halftime_score = $event['score']['halftime']['home'];
            $fixture->away_team_halftime_score = $event['score']['halftime']['away'];
            $fixture->home_team_fulltime_score = $event['score']['fulltime']['home'];
            $fixture->away_team_fulltime_score = $event['score']['fulltime']['away'];
            $fixture->home_team_extratime_score = $event['score']['extratime']['home'];
            $fixture->away_team_extratime_score = $event['score']['extratime']['away'];
            $fixture->home_team_penalty = $event['score']['penalty']['home'];
            $fixture->away_team_penalty = $event['score']['penalty']['away'];
            # save
            $fixture->save();
//            dump($fixture);
        }

    }
}
