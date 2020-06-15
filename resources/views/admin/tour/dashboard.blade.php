<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            /* background-image: url('https://i.pinimg.com/736x/e0/fa/84/e0fa84017712e6acb5a32a05029ca1e2.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
        button{
            background-color: #169999;
            
        }
        img{
            width:50px;
        }
    </style>
</head>

<body>
    <center>
        <table border="1px;" height="10px;">
            <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Typetour</th>
            <th>Schedule</th>
            <th>Depart</th>
            <th>Number people</th>
            <th>Price</th>
            </tr>
            @foreach($display as $data)
            <tr>
                <td>{{$data -> name}}</td>
                <td><img src="{{'/storage/'. $data->image }}" alt=""></td>
                <td>{{$data -> typetour}}</td>
                <td>{{$data -> schedule}}</td>
                <td>{{$data -> depart}}</td>
                <td>{{$data -> numberPeople}}</td>
                <td>{{$data -> price}}</td>
            </tr>
            @endforeach
        </table>
    </center>
    <center>
        <form action="/admin/tour/create" method="POST">
            @csrf
            <button type="submit">INSERT</button>
        </form>
    </center>

</body>

</html>