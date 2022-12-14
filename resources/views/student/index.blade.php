@extends('layout.student')
@section('content')
<h2>All students</h2>
<a href="{{route('student.create')}}">Add new student</a>
<hr>
@foreach($students as  $student)
    <div>id: {{$student->id}}</div>
    <div>name: {{$student->name}}</div>
    <div>surname: {{$student->surname}}</div>
    <div>faculty: {{$student->faculty}}</div>
    <div>age: {{$student->age}}</div>
    <div>course: {{$student->course}}</div>
    <div>bio: {{$student->bio}}</div>
    <div><a href="{{route('student.show', $student->id)}}">show</a></div>
    <div><a href="{{route('student.delete', $student->id)}}">delete</a></div>
    <hr>
@endforeach
@endsection
