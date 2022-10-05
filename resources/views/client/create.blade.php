@extends('layout.client')
@section('content')
<h3>Create page</h3>
<hr>
<form action="{{route('client.store')}}" method="post">
    @csrf
    <div style="margin-bottom: 15px"><input type="text" name="name" placeholder="name"></div>
    <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname"></div>
    <div style="margin-bottom: 15px"><input type="email" name="email" placeholder="email"></div>
    <div style="margin-bottom: 15px"><input type="number" name="tel_number" placeholder="tel_number"></div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age"></div>
    <div style="margin-bottom: 15px"><textarea name="description" placeholder="description"></textarea></div>
    <div style="margin-bottom: 15px"><input type="checkbox" name="is_married" id="isMarried">
        <label for="isMarried">is married</label>
    </div>
    <input type="submit" value="Добавить">
</form>
@endsection
