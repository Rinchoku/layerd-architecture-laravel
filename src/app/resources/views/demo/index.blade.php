<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
</head>
<body>
    <h1>Hello World!!</h1>
    @foreach ($users as $user)
        <p>This is user {{ $user->last_name }} {{ $user->first_name }}</p>
    @endforeach
</body>
</html>