
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
</head>
<body>


{{--    @foreach($response as $fixture)--}}
{{--        <div>--}}
{{--            <span class="mr-8">{{$fixture['fixture']['date']}}</span>--}}
{{--            <span class="mr-8">{{$fixture['teams']['home']['name']}}</span> VS --}}
{{--            <span class="ml-8">{{$fixture['teams']['away']['name']}}</span><br>--}}
{{--        </div>--}}
{{--    @endforeach --}}

    <table class="ml-auto mr-auto">
        <thead>
            <tr>
                <td>
                    date
                </td>
                <td>
                    league
                </td>
                <td>
                    period
                </td>
                <td>
                    home team
                </td>
                <td>
                    score home
                </td>
                <td>
                    score away
                </td>
                <td>
                    away team
                </td>

            </tr>
        </thead>
        <tbody>
            @foreach($events as $fixture)
            <tr class="border">
                <td class="p-2">
                    {{$fixture->date}}
                </td>
                <td class="p-2">
                    {{$fixture->league_name}}
                </td>
                <td class="p-2">

                     {{$fixture->status}}
                </td>
                <td class="p-2">
                    {{$fixture->home_team_name}}
                </td>
                <td class="p-2">
                    {{$fixture->home_team_goals}}
                </td>
                <td class="p-2">
                    {{$fixture->away_team_goals}}
                </td>
                <td class="p-2">
                    {{$fixture->away_team_name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
