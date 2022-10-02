<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City</title>
</head>
<body>
<h2>Cities list</h2>
<div><a href="{{route('city.create')}}">Add new city to list</a></div>
<hr>
@foreach($cities as $city)
<div>id: {{$city->id}}</div>
<div>title: {{$city->title}}</div>
<div>population: {{$city->population}}</div>
<div>yardage: {{$city->yardage}}</div>
<div>is_capital: {{$city->is_capital}}</div>
<div>history: {{$city->history}}</div>
    <div><a href="{{route('city.show', $city->id)}}">Show</a></div>
<form action="{{route('city.delete', $city->id)}}" method="post">
    @csrf
    @method('Delete')
    <input type="submit" value="Delete">
</form>
<hr>
@endforeach
</body>
</html>
