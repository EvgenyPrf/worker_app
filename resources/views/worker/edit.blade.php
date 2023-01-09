@extends('layout.animal')
@section('content')
<h3>Update page</h3>
<hr>
<form action="{{route('workers.update', $worker->id)}}" method="post">
    @csrf
    @method('Patch')
    <div style="margin-bottom: 15px"><input type="text" name="name" placeholder="name" value="{{old('name') ?? $worker->name}}">
        @error('name')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname" value="{{old('surname') ?? $worker->surname}}">
        @error('surname')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{old('age') ?? $worker->age}}">
        @error('age')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="email" placeholder="email"
                                            value="{{old('age') ?? $worker->email}}">
        @error('email')
        <div>{{$message}}</div>
        @enderror
    </div>
    <input type="submit" value="Сохранить">
</form>
@endsection
