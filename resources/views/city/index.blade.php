@extends('layout.city')
@section('content')
<h2>Cities list</h2>
<div><a href="{{route('city.create')}}">Add new city to list</a></div>
<hr>
<form action="{{route('city.index')}}">
    <input type="number" name="id" placeholder="id" value="{{request()->get('id')}}">
    <input type="text" name="title" placeholder="title" value="{{request()->get('title')}}">
    <input type="number" name="population_from" placeholder="population_from" value="{{request()->get('population_from')}}">
    <input type="number" name="population_to" placeholder="population_to" value="{{request()->get('population_to')}}">
    <input type="number" name="yardage_from" placeholder="yardage_from" value="{{request()->get('yardage_from')}}">
    <input type="number" name="yardage_to" placeholder="yardage_to" value="{{request()->get('yardage_to')}}">
    <input id="isCapital" type="checkbox" name="is_capital" {{request()->get('is_capital') == 'on' ? ' checked' : ''}}>
    <label for="isCapital">Is capital</label>
    <input type="submit" value="search">
    <a href="{{route('city.index')}}">reset</a>
</form>
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
<div class="my-nav">{{$cities->withQueryString()->links()}}</div>
@endsection
