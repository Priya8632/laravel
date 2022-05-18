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
        img{
            margin-right: 1200px;
        }
        ul li {
            margin: 12px;
        }

        ul li a:hover {
            color: crimson;
        }

        ul li a {
            font-size: medium;
        }

        h3, h2 {
            color: white;
        }

        .container {
            padding: 20px;
        }
    </style>
</head>

<body>


    <nav>
        <ul class="nav">
            <img src="images/logo.png" height="80px" width="180px" alt="">
            <li><a class="nav-link text-danger" href="{{ url('Logout') }}">Sign out</a></li>
        </ul>
    </nav>
    
    <div class="container bg-danger">
        <h2>hello {{session('email')}}</h2>
        <h3>welcome to our bakery shop</h3>
    </div>

</body>

</html>