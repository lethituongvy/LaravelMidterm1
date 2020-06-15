<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">

        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Delete</th>
            <!-- <th>Insert</th> -->
            <th>Edit</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->getDisplayPrice()}}</td>
            <td>
                <form action="{{'/books/'.$book->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </td>
            
            <td>
                <a href="{{'/books/'.$book->id.'/edit'}}">EDIT</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>