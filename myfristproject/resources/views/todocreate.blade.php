<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <H1>Create Todos</H1>
    <form method="POST" action="/todos">
        @csrf
       
        <input type="text" name="title"><br> <br>
        <input type="text" name="description"><br>
        <input type="submit">
    </form>

</body>

</html>