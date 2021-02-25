<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN PANELE GIRIS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>body{
        background-color:#ecf0f1;
        width: 100%;
        height: 100vh;
    }
    main{
        width: 100%;
        height: 100%;
        border: 1px solid black;
    }
    form{
        width: 500px;
    }
    input[type="text"],input[type="password"]{
        border: none;
        width: 100%;
        margin: 10px;
        padding: 10px 5px;
        border-bottom: 1px solid red;
        background: white;
    }
    input[type="submit"]{
        background: red;
        margin: 10px;
        border:none;
        color: white;
        padding: 5px 20px;
        border: 1px solid red;
    }
    input[type="submit"]:hover{
        background: white;
        color: red;
    }
    .title{
        border-bottom: red 2px solid;
        padding: 5px;
        margin: 10px;
        width: 100%;
    }
    </style>
</head>
<body>
        <main class="w-100 h-100 row mx-0 align-items-center justify-content-center">

                <form action="{{route('admin.login.post')}}" method="post">
                    @if(isset($test))
                        <div class="alert alert-danger">{{$test}}</div>
                    @endif
                    @csrf
                    <h1 class="text-center text-danger title">ADMIN PANEL LOGIN</h1>
                    <input name="username" type="text" placeholder="@username" name="" id="">
                    <input name="password" type="password" placeholder="p**sword">
                    <input type="submit" value="LOGIN">
                </form>
        </main>
</body>
</html>