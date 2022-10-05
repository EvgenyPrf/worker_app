@extends('layout.student')
@section('content')
<h2>Student with id: {{$student->id}}</h2>
<hr>
    <div>id: {{$student->id}}</div>
    <div>name: {{$student->name}}</div>
    <div>surname: {{$student->surname}}</div>
    <div>faculty: {{$student->faculty}}</div>
    <div>age: {{$student->age}}</div>
    <div>course: {{$student->course}}</div>
    <div>bio: {{$student->bio}}</div>
    <div><a href="{{route('student.index')}}">Back</a></div>
@endsection
