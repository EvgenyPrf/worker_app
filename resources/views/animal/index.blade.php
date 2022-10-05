@extends('layout.animal')
@section('content')
<h3>All animals</h3>
<a href="{{route('animal.create')}}">Add animal</a>
<hr>
<form action="{{route('animal.index')}}">
    <input type="number" name="id" placeholder="id" value="{{request()->get('id')}}">
    <input type="text" name="nickname" placeholder="nickname" value="{{request()->get('nickname')}}">
    <input type="text" name="title" placeholder="title" value="{{request()->get('title')}}">
    <input type="text" name="sex" placeholder="sex" value="{{request()->get('sex')}}">
    <input type="number" name="age_from" placeholder="age from" value="{{request()->get('age_from')}}">
    <input type="number" name="age_to" placeholder="age to" value="{{request()->get('age_to')}}">
    <input id="isPredator" type="checkbox" name="is_predator" {{request()->get('is_predator') == 'on' ? ' checked' : ''}}>
    <label for="isPredator">is predator</label>
    <input type="submit" value="Search">
    <a href="{{route('animal.index')}}" type="button">Сбросить</a>
</form>
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
<div class="my-nav">{{$animals->withQueryString()->links()}}</div>
@endsection
