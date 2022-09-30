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
<h3>All animals</h3>
<a href="{{route('animal.create')}}">Add animal</a>
<hr>
@foreach($animals as $animal)
     <div>id: {{$animal->id}}</div>
     <div>nickname: {{$animal->nickname}}</div>
     <div>title: {{$animal->title}}</div>
     <div>sex: {{$animal->sex}}</div>
     <div>age: {{$animal->age}}</div>
     <div>growth: {{$animal->growth}}</div>
     <div>is_predator: {{$animal->is_predator}}</div>
     <div>description: {{$animal->description}}</div>
     <div><a href="{{route('animal.show', $animal->id)}}">Выбрать</a></div>
     <div><a href="{{route('animal.edit', $animal->id)}}">Редактировать</a></div>
     <form action="{{route('animal.delete', $animal->id)}}" method="post">
         @csrf
         @method('Delete')
         <input type="submit" value="Удалить">
     </form>
     <hr>
@endforeach
</body>
</html>
