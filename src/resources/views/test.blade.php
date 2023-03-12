<html>
    <body>
        <h1>Login Success</h1>
        @foreach ($users as $user)
            <p>{{ $user['email'] }}</p>
        @endforeach
    </body>
</html>
