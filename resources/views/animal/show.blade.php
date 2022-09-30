<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal</title>
</head>
<body>
<h3>Animal with id: {{$animal -> id}}</h3>
<hr>
     <div>id: {{$animal->id}}</div>
     <div>nickname: {{$animal->nickname}}</div>
     <div>title: {{$animal->title}}</div>
     <div>sex: {{$animal->sex}}</div>
     <div>age: {{$animal->age}}</div>
     <div>growth: {{$animal->growth}}</div>
     <div>is_predator: {{$animal->is_predator}}</div>
     <div>description: {{$animal->description}}</div>
     <a href="{{route('animal.index')}}">Назад</a>
     <hr>
</body>
</html>
