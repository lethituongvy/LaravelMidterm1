<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="/todos">
    $csrf
        <H1>Create Todos</H1>
        Name: <input type="text" name="title"><br> <br>
        Mail: <input type="text" name="description"><br>
        <input type="submit">
    </form>

</body>

</html>