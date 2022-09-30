<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
</head>
<body>
<h3>All clients</h3>
<a href="{{route('client.create')}}">Add client</a>
<hr>
@foreach($clients as $client)
     <div>id: {{$client->id}}</div>
     <div>name: {{$client->name}}</div>
     <div>surname: {{$client->surname}}</div>
     <div>email: {{$client->email}}</div>
     <div>tel_number: {{$client->tel_number}}</div>
     <div>age: {{$client->age}}</div>
     <div>is_married: {{$client->is_married}}</div>
     <div>description: {{$client->description}}</div>
     <div><a href="{{route('client.show', $client->id)}}">Выбрать</a></div>
     <div><a href="{{route('client.edit', $client->id)}}">Редактировать</a></div>
     <form action="{{route('client.delete', $client->id)}}" method="post">
         @csrf
         @method('Delete')
         <input type="submit" value="Удалить">
     </form>
     <hr>
@endforeach
</body>
</html>
