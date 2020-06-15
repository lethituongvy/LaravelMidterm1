<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <style type="text/css">
        #display {
            display: grid;
            grid-template-columns: 350px 350px 350px 350px;
            grid-gap: 20px;
            width: 100%;
        }

        #class {
            display: Grid;
            grid-template-columns: 50px 400px 50px 100px 50px 100px 100px 10px;
            grid-template-rows: 10px 20px;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div id="class" style="display: flex;">
            <div style="margin: auto;">
                <a href="/home"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcReq2ncwCiduKTkOks9BghDiNIBEeP-hSwm2ke5oWUm5igyjhEX&usqp=CAU" alt=""> </a>
            </div>

            <div style="margin:auto;display:flex">
                <h4 style="color: #D8D840;">DU LỊCH</h4>
            </div>
            <div style="margin:auto ; display:flex">
                <h4 style="color: #D8D840;">BOOK VÉ MÁY BAY</h4>
            </div>
            <div style="margin:auto ; display:flex">
                <h4 style="color: #D8D840;">BOOK KHÁCH SẠN</h4>
            </div>
            <div style="margin:auto ; display:flex">
                <h4 style="color: #D8D840;">THUÊ XE</h4>
            </div>
            <div style="margin:auto ; display:flex">
                <h4 style="color: #D8D840;">TIN TỨC</h4>
            </div>
            <div style="margin:auto ; display:flex">
                <h4 style="color: #D8D840;">GIỚI THIỆU</h4>
            </div>
    </header>
    <!-- hiển thị sản phẩm -->
    <div>
        <div id="display">
            @foreach ($show as $shows)
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="{{'/storage/'.$shows->image}}" alt="Card image cap">
                            <span style="display:flex; margin-top:-20px">
                                <p style="background-color: #FE25FE;"><i class="fas fa-stopwatch">Còn {{$shows->numberPeople}} ngày nữa</i></p>
                                <p style="background-color: gray;">{{$shows->typetour}}</p>
                            </span>
                            <center>
                                <div class="caption">
                                    <h5 class="card-title" style="background-color:#C0C0C0 ;">{{$shows->name}}</h5>
                                    <p class="card-text"><i class="fas fa-stopwatch">Lịch trình:<span>{{ $shows->schedule}}</span></i> </p>
                                    <h5 class="card-text"><i class="fal fa-calculator">Khởi hành: {{ $shows->depart}}</i></h5>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6"><i class="far fa-user-check">Số chỗ còn nhận: {{$shows->numberPeople}}</i></div>
                                        <div class="col-xs-6 col-md-6"><span style="color: #FE25FE;">{{$shows->price}}$</span></div>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>