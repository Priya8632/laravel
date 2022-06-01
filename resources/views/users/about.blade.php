<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>about</title>
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
        h1,h5,h6 {
            text-align: center;
        }
        h5 {
            font-family: fantasy;
        }

        hr {
            background-color: crimson;
            height: 3px;
            width: 80px;
        }

        .image {
            position: relative;
        }
        .overlay {
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            color:white;
            opacity: 0;
            transition: opacity 0.25s;
            backdrop-filter: blur(3px);
            align-items: center;
            justify-content: center;
        }

        .overlay:hover {
            opacity: 1;
        }

        .overlay > * {
            transform: translateY(25px);
            transition: transform 0.25s;
        }

        .overlay:hover > * {
            transform: translateY(0);

        }

        .title {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-top: 180px;
            font-family: sans-serif;
        }
    </style>
</head>

<body>

    @include('users.header');
    <div class="container">
        <h1>About Us</h1>
        <hr>
    </div>

    <div class="container">
        <div class="row m-5">
            <div class="col-4 image">
                <img src="photos/images/c7.jpg" class="nice" alt="" height="400px" width="300px">
                <div class="overlay">
                    <p class="title">Black Forest</p>
                </div>
            </div>
            <div class="col-4 image">
                <img src="photos/images/c2.jpg" class="nice" alt="" height="400px" width="300px">
                <div class="overlay">
                    <p class="title">Cookies</p>
                </div>
            </div>
            <div class="col-4 image">
                <img src="photos/images/c8.jpg" class="nice" alt="" height="400px" width="300px">
                <div class="overlay">
                    <p class="title">Chocolate</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2 mx-auto">
                <img src="photos/images/ceo.jpg" alt="" class="rounded-circle" height="120px" width="150px">
                <h5>Jonsan Petal</h5>
                <h6>CEO of bakery shop</h6>
            </div>
        </div>
    </div>

</body>

</html>