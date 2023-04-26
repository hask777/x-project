<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                date
            </th>
            <th scope="col" class="px-6 py-3">
                country
            </th>
            <th scope="col" class="px-6 py-3">
                league
            </th>
            <th scope="col" class="px-6 py-3">
                status
            </th>
            <th scope="col" class="px-6 py-3">
                home team
            </th>
            <th scope="col" class="px-6 py-3">
                score home
            </th>
            <th scope="col" class="px-6 py-3">
                score away
            </th>
            <th scope="col" class="px-6 py-3">
                away team
            </th>
            <th scope="col" class="px-6 py-3">
                odds
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $fixture)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$fixture->date}}
            </th>
            <td class="px-6 py-4">
                {{$fixture->league_name}}
            </td>
            <td class="px-6 py-4">
                {{$fixture->league_country}}
            </td>
            <td class="px-6 py-4">
                {{$fixture->status}}
            </td>
            <td class="px-6 py-4">
                {{$fixture->home_team_name}}
            </td>
            <td class="px-6 py-4">
                {{$fixture->home_team_goals}}
            </td>
            <td class="px-6 py-4">
                {{$fixture->away_team_goals}}
            </td>
            <td class="px-6 py-4">
                {{$fixture->away_team_name}}
            </td>
{{--            <td class="px-6 py-4">--}}
{{--                <a href="{{route('show', $fixture['fixture']['id'])}}">show</a>--}}
{{--            </td>--}}
            <td class="px-6 py-4">
                <a href="{{route('predict', $fixture->fx_id)}}">show</a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
