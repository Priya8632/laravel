<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <style>
        body {
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .nav-item a:hover {
            color: crimson;
        }
        .nav-item a {
            font-size: medium;
        }
        .nav-item a {
            color: black;
            font-size: medium;
        }
        .nav img {
            display: flex;
            flex-direction: row-reverse;
        }
        h3,h2 {
            color: black;
        }
        h4 {
            color: blue;
        }
        .container-fluid {
            padding: 20px;
        }
    </style>
</head>

<body>

        <nav class="navbar">
            <img src="photos/images/logo.png" height="80px" width="180px" alt="">
            <ul class="nav justify-content-end">
                <li class="nav-item"><a href="home" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="about" class="nav-link">ABOUT</a></li>
                <li class="nav-item"><a href="user_product" class="nav-link">SHOP</a></li>
                <li><a class="nav-link text-danger" href="{{ url('logout') }}">SIGN OUT</a></li>
            </ul>
        </nav>

    <div class="container-fluid bg-warning">
        <h2>hello : </h2>
        <h4>{{session('email')}}</h4>
        <h3>welcome to our bakery shop</h3>
    </div>

</body>

</html>