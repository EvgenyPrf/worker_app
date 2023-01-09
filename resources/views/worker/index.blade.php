@extends('layout.worker')
@section('content')
<h3>All workers</h3>
<a href="{{route('workers.create')}}">Add worker</a>

<hr>
@foreach($workers as $worker)
     <div>id: {{$worker->id}}</div>
     <div>name: {{$worker->name}}</div>
     <div>surname: {{$worker->surname}}</div>
     <div>age: {{$worker->age}}</div>
     <div>email: {{$worker->email}}</div>
     <div><a href="{{route('workers.show', $worker->id)}}">Выбрать</a></div>
     <div><a href="{{route('workers.edit', $worker->id)}}">Редактировать</a></div>
     <form action="{{route('workers.destroy', $worker->id)}}" method="post">
         @csrf
         @method('Delete')
         <input type="submit" value="Удалить">
     </form>
     <hr>
@endforeach
@endsection
