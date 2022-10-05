@extends('layout.city')
@section('content')
<div style="margin-bottom: 5px">id: {{$city->id}}</div>
<div style="margin-bottom: 5px">title: {{$city->title}}</div>
<div style="margin-bottom: 5px">population: {{$city->population}}</div>
<div style="margin-bottom: 5px">yardage: {{$city->yardage}}</div>
<div style="margin-bottom: 5px">is_capital: {{$city->is_capital}}</div>
<div style="margin-bottom: 5px">history: {{$city->history}}</div>
<a href="{{route('city.index')}}">Back</a>
<a href="{{route('city.edit', $city->id)}}">Edit</a>
@endsection
