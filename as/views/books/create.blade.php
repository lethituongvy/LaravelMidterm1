<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        input button{
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="/books" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="author" placeholder="author">
        <input type="text" name="price" placeholder="price">
        <button type="submit">ADD</button>
    </form>
</body>
</html>