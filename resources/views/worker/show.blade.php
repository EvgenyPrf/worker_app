@extends('layout.worker')
@section('content')
    <h3>Worker with id: {{$worker -> id}}</h3>
    <hr>
    <div>id: {{$worker->id}}</div>
    <div>nickname: {{$worker->name}}</div>
    <div>title: {{$worker->surname}}</div>
    <div>age: {{$worker->age}}</div>
    <div>email: {{$worker->email}}</div>
    <div>is_married: {{$worker->is_married}}</div>
    <div>description:
        <div>{{$worker->description}}</div>
    </div>
    <a href="{{route('workers.index')}}">Назад</a>
    <hr>
@endsection
