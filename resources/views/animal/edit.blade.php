<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal</title>
</head>
<body>
<h3>Update page</h3>
<hr>
<form action="{{route('animal.update', $animal->id)}}" method="post">
    @csrf
    @method('Patch')
    <div style="margin-bottom: 15px"><input type="text" name="nickname" placeholder="nickname" value="{{$animal->nickname}}"></div>
    <div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title" value="{{$animal->title}}">
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="sex" placeholder="sex" value="{{$animal->sex}}"></div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{$animal->age}}"></div>
    <div style="margin-bottom: 15px"><input type="number" name="growth" placeholder="growth"
                                            value="{{$animal->growth}}"></div>
    <div style="margin-bottom: 15px"><textarea name="description" placeholder="description">
            {{$animal -> description}}
        </textarea></div>
    <div style="margin-bottom: 15px"><input type="checkbox" name="is_predator" id="isPredator"
        {{$animal->is_predator ? ' checked' : ''}}>
        <label for="isPredator">is predator</label>
    </div>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
