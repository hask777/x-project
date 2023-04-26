<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use App\Models\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class TestController extends Controller
{

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
            'x-rapidapi-key' => "36a1d18a201d5278d717bedb071fd142"
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
        dump($response);

        foreach ($response as $event)
            $prediction = new Prediction();
            $prediction->winner_id = $event['predictions']['winner']['id'];
            $prediction->winner_name = $event['predictions']['winner']['name'];
            $prediction->comment = $event['predictions']['winner']['comment'];
            $prediction->win_or_draw = $event['predictions']['win_or_draw'];
            $prediction->under_over = $event['predictions']['under_over'];
            $prediction->goals_home = $event['predictions']['goals']['home'];
            $prediction->goals_away = $event['predictions']['goals']['away'];
            $prediction->advice = $event['predictions']['advice'];
            $prediction->percent_home = $event['predictions']['percent']['home'];
            $prediction->percent_draw = $event['predictions']['percent']['draw'];
            $prediction->percent_away = $event['predictions']['percent']['away'];

            $prediction->save();

        return view('predict', ['response' => $response]);
    }

}
