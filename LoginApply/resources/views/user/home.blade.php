<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/honme.css">
    <title>Document</title>
</head>

<body>
    @include('partials\header')
    <header>
        @if(Auth::user())
        <h3>Hi: {{Auth::user()->name }}</h3>
        <form action="/home/logout" method="GET">
            <Button type="submit">logout</Button>
        </form>
        @else
        <form action="/auth/login">
            <button type="submit">Login</button>
        </form>
        <form action="/auth/register">
            <button type="submit">Register</button>
        </form>
        @endif
    </header>
    @include('partials\footer')

</body>

</html>