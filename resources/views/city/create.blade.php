@extends('layout.city')
@section('content')
<h2>Create page</h2>
<hr>
<form action="{{route('city.store')}}" method="post">
    @csrf
<div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title" value="{{old('title')}}">
@error('title')
    <div>{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 15px"><input type="number" name="population" placeholder="population" value="{{old('population')}}">
    @error('population')
    <div>{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 15px"><input type="number" name="yardage" placeholder="yardage" value="{{old('yardage')}}">
    @error('yardage')
    <div>{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 15px"><textarea name="history" placeholder="history">{{old('history')}}</textarea>
    @error('history')
    <div>{{$message}}</div>
    @enderror
</div>
<div style="margin-bottom: 15px"><input type="checkbox" name="is_capital" id="isCapital" {{old('is_capital') == 'on' ? ' checked' : ''}}>
    <label for="isCapital">is Capital</label></div>
<input type="submit" value="Create">
</form>
@endsection
