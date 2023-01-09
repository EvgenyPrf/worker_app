@extends('layout.worker')
@section('content')
<h3>Create worker</h3>
<hr>
<form action="{{route('workers.store')}}" method="post">
    @csrf
    <div style="margin-bottom: 15px"><input type="text" name="name" placeholder="name" value="{{old('name')}}">
    @error('name')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname" value="{{old('surname')}}">
        @error('surname')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{old('age')}}">
        @error('age')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="email" placeholder="email" value="{{old('email')}}">
        @error('email')
        <div>{{$message}}</div>
        @enderror
    </div>
    <input type="submit" value="Добавить">
</form>
@endsection
