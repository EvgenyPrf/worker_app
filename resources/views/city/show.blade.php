<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City</title>
</head>
<h2>City with id: {{$city -> id}}</h2>
<body>
<div style="margin-bottom: 5px">id: {{$city->id}}</div>
<div style="margin-bottom: 5px">title: {{$city->title}}</div>
<div style="margin-bottom: 5px">population: {{$city->population}}</div>
<div style="margin-bottom: 5px">yardage: {{$city->yardage}}</div>
<div style="margin-bottom: 5px">is_capital: {{$city->is_capital}}</div>
<div style="margin-bottom: 5px">history: {{$city->history}}</div>
<a href="{{route('city.index')}}">Back</a>
<a href="{{route('city.edit', $city->id)}}">Edit</a>
</body>
</html>
