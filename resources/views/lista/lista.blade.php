<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <a href="{{ action("UserController@db") }}">volver</a>
    <ul>
    @foreach ($users as $user)
        <a href="{{ route('users.show', ['id' => $user->id]) }}"><li>{{$user->name}}</li></a>
    @endforeach
    </ul>
</body>
</html>