@extends('layout.student')
@section('content')
<h2>Create page</h2>
<form action="{{route('student.store')}}" method="post">
    @csrf
    @method('Post')
<div style="margin-bottom: 15px"><input type="text" name="name" placeholder="name"></div>
<div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname"></div>
<div style="margin-bottom: 15px"><input type="text" name="faculty" placeholder="faculty"></div>
<div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age"></div>
<div style="margin-bottom: 15px"><input type="number" name="course" placeholder="course"></div>
<div style="margin-bottom: 15px"><input type="text" name="bio" placeholder="bio"></div>
    <div><input type="submit" value="Add"></div>
</form>
<hr>
@endsection
