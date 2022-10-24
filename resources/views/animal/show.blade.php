@extends('layout.animal')
@section('content')
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
@endsection
