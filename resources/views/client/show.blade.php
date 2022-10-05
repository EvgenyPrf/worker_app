@extends('layout.client')
@section('content')
<h3>Client with id: {{$client -> id}}</h3>
<hr>
     <div>id: {{$client->id}}</div>
     <div>name: {{$client->name}}</div>
     <div>surname: {{$client->surname}}</div>
     <div>email: {{$client->email}}</div>
     <div>tel_number: {{$client->tel_number}}</div>
     <div>age: {{$client->age}}</div>
     <div>is_married: {{$client->is_married}}</div>
     <div>description: {{$client->description}}</div>
     <a href="{{route('client.index')}}">Назад</a>
     <hr>
@endsection
