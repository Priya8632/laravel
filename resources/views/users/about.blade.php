<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>about</title>
    <style>
        ul li a:hover{
            color:palevioletred;
        }
        img{
            text-align: center;
        }
        .container{
            margin:30px;
            padding:80px;
        }
    </style>
</head>
<body>
    <div>
        @include('users.header')
    </div>
    <div class="container">
        <img src="images/c4.jpg" height="300px" width="400px" alt="new image"><br>
        <br><br>
        <span>Covers delicious recipes, new innovations, expert tips, and the latest on all things flour. <br>
        Bake From Scratch Magazine features easy-to-follow recipes, techniques for creating artisan baked goods,
        <br> and endless inspiration for home bakers.
        </span>
        <h2>-Denis Richi</h2> 
    </div>



</body>
</html>