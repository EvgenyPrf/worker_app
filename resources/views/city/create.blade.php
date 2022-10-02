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
<h2>Create page</h2>
<hr>
<form action="{{route('city.store')}}" method="post">
    @csrf
<div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title"></div>
<div style="margin-bottom: 15px"><input type="number" name="population" placeholder="population"></div>
<div style="margin-bottom: 15px"><input type="number" name="yardage" placeholder="yardage"></div>
<div style="margin-bottom: 15px"><textarea name="history" placeholder="history"></textarea>
<div style="margin-bottom: 15px"><input type="checkbox" name="is_capital" id="isCapital">
    <label for="isCapital">is Capital</label></div>
<input type="submit" value="Create">
</form>
</body>
</html>
