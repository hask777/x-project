<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div>{{$response[0]['predictions']['winner']['name']}}</div>
    <div>{{$response[0]['predictions']['winner']['comment']}}</div>
    <div>{{$response[0]['predictions']['advice']}}</div>
    <div><span>home</span>   {{$response[0]['predictions']['goals']['home']}}</div>
    <div><span>away</span>   {{$response[0]['predictions']['goals']['away']}}</div>
    <div><span>home:</span>  {{$response[0]['predictions']['percent']['home']}}</div>
    <div><span>draw</span>   {{$response[0]['predictions']['percent']['draw']}}</div>
    <div><span>away</span>   {{$response[0]['predictions']['percent']['away']}}</div>

</div>
</body>
</html>
