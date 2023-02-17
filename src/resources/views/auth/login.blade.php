<html>
<head>
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form method="post" action="">
        <input name="email" />
        <input name="password" />
        <input name="_token" value="{{ csrf_token() }}" />
        <button type="submit">Login</button>
    </form>
</body>
</html>
