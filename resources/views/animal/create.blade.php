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
<h3>Create page</h3>
<hr>
<form action="{{route('animal.store')}}" method="post">
    @csrf
    <div style="margin-bottom: 15px"><input type="text" name="nickname" placeholder="nickname"></div>
    <div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title"></div>
    <div style="margin-bottom: 15px"><input type="text" name="sex" placeholder="sex"></div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age"></div>
    <div style="margin-bottom: 15px"><input type="number" name="growth" placeholder="growth"></div>
    <div style="margin-bottom: 15px"><textarea name="description" placeholder="description"></textarea></div>
    <div style="margin-bottom: 15px"><input type="checkbox" name="is_predator" id="isPredator">
        <label for="isPredator">is predator</label>
    </div>
    <input type="submit" value="Добавить">
</form>
</body>
</html>
