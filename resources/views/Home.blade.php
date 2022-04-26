<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .back
        {
            background-image: url('../images/c10.jpg');
            background-repeat: no-repeat;
            background-position:top;
            background-size: cover;
            background-attachment:fixed;
            width:100%;
            height:800px;

        }
        ul li a:hover{
            background-color:chocolate;
            color:white;
        }
        ul li a {
            color:black;
            font-size:medium;
        }
        h4{
            margin-top:100px;
        }
        h1,button,h4{
            margin-left:50px;
        }
        button{
            background-color: chocolate;
            border:none;
            padding:10px;
        }
    </style>
</head>

<body>
    <div class="back">
        @include('header')
        <h4>Have A Cake-A-Dilicious</h4>
        <h1>UP to 50% Off</h1>
        <button type="submit">Shop Now</button>
    </div>
</body>

</html>