@extends('layout.animal')
@section('content')
<h3>Create page</h3>
<hr>
<form action="{{route('animal.store')}}" method="post">
    @csrf
    <div style="margin-bottom: 15px"><input type="text" name="nickname" placeholder="nickname" value="{{old('nickname')}}">
    @error('nickname')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title" value="{{old('title')}}">
        @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="sex" placeholder="sex" value="{{old('sex')}}">
        @error('sex')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{old('age')}}">
        @error('age')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="growth" placeholder="growth" value="{{old('growth')}}">
        @error('growth')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><textarea name="description" placeholder="description">{{old('description')}}</textarea>
        @error('description')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="checkbox" name="is_predator" id="isPredator" {{old('is_predator') == 'on' ? ' checked' : ''}}>
        <label for="isPredator">is predator</label>
    </div>
    <input type="submit" value="Добавить">
</form>
@endsection
