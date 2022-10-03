<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City</title>
</head>
<body>
<form action="{{route('city.update', $city->id)}}" method="post">
    <h2>Change title</h2>
    @csrf
    @method('Patch')
    <div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title" value="{{old('title') ?? $city->title}}">
    @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="population" placeholder="population" value="{{old('population') ?? $city->population}}">
        @error('population')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="yardage" placeholder="yardage" value="{{old('yardage') ?? $city->yardage}}">
        @error('yardage')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><textarea name="history" placeholder="history">{{old('history') ?? $city->history}}</textarea>
        @error('history')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="checkbox" name="is_capital" id="isCapital"
        {{$city->is_capital ? ' checked':''}}>
        <label for="isCapital">is Capital</label></div>
    <input type="submit" value="Save">
</form>
</body>
</html>
