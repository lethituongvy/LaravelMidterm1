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
    <form action="{{'/books/'.$book->id}}" method="POST">
        @csrf
        @method("PATCH")
        <input type="text" name="title" placeholder="title" value="{{$book->title}}">
        <input type="text" name="author" placeholder="author"value="{{$book->author}}">
        <input type="text" name="price" placeholder="price"value="{{$book->price}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>