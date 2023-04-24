<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class TestController extends Controller
{

    public function fixtures(): View
    {
        $events = DB::table('fixtures')->get();
        dump($events[0]);

        return view('fixtures', ['events' => $events]);
    }

    public function store(Request $request)
    {
        $response = Http::withHeaders([
            'x-rapidapi-host'=> "v3.football.api-sports.io",
            'x-rapidapi-key' => "36a1d18a201d5278d717bedb071fd142"
        ])->get('https://v3.football.api-sports.io/fixtures', [
            'date' => '2023-04-24',
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

//        return view('fixture');
    }

    public function rounds()
    {
        $response = Http::withHeaders([
            'x-rapidapi-host'=> "v3.football.api-sports.io",
            'x-rapidapi-key' => "36a1d18a201d5278d717bedb071fd142"
        ])->get('https://v3.football.api-sports.io/fixtures/rounds', [
            'season' => '2022',
            'league' => '61'
        ])->json()['response'];

        dump($response);

        return view('fixtures');
    }

    public function table()
    {
        $response = Http::withHeaders([
            'x-rapidapi-host'=> "v3.football.api-sports.io",
            'x-rapidapi-key' => "f8736fda859e6c5afabadd014e6bf46f"
        ])->get('https://v3.football.api-sports.io/fixtures', [
            'date' => '2023-04-23',
        ])->json()['response'];


//        $this->response = $response;

        // save to db

        dump($response[0]);
        return view('table', ['response' => $response]);
    }

    public function show(Request $request, $id)
    {
        $response = Http::withHeaders([
            'x-rapidapi-host'=> "v3.football.api-sports.io",
            'x-rapidapi-key' => "36a1d18a201d5278d717bedb071fd142"
        ])->get('https://v3.football.api-sports.io/fixtures/events', [
            'fixture' => $id,
        ])->json()['response'];
        dd($response);

        return view('show');
    }

    public function predict(Request $request, $id)
    {
        $response = Http::withHeaders([
            'x-rapidapi-host'=> "v3.football.api-sports.io",
            'x-rapidapi-key' => "36a1d18a201d5278d717bedb071fd142"
        ])->get('https://v3.football.api-sports.io/predictions', [
            'fixture' => $id,
        ])->json()['response'];
        dd($response);

        return view('predict');
    }

}
