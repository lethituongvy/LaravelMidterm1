<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card-body">
        <form action="/auth/login" method="POST">
            @csrf
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <p style="color:red">{{ Request::get('error')}}</p>
            <div class="form-group">
                <input type="submit" value="Login" class="btn float-right login_btn">
            </div>
        </form>
    </div>
</body>

</html>