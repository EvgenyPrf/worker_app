<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
</head>
<body>
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
</body>
</html>
