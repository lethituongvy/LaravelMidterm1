<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #display {
            display: grid;
            grid-template-columns: 500px 500px 500px;

        }
    </style>
</head>

<body>
    <h1>Todos</h1>
    <div id=display>
        @foreach($todos as $todo)
        <div>
            <h2> Title: {{ $todo-> title}}</h2>
            <h2> Description: {{ $todo-> description}}</h2>
            <form action="{{ '/todos/'.$todo->id }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit">  
                    DELETE
                </button>
            </form>
            <hr />
        </div>
        @endforeach
    </div>
</body>

</html>