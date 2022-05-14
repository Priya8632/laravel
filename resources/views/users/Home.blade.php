<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .back
        {
            background-image: url('../images/c12.jpg');
            background-repeat: no-repeat;
            background-position:center;
            background-size:cover;
            width:100%;
            height:100vh;

        }
        ul li{
            margin:12px;
        }
        ul li a:hover{
            color:crimson;
        }
        ul li a {
            font-size:medium;
            font-weight:600;
        }
        h3{
            color:crimson;
            margin-top:150px;
        }
        h1{
            color:black;
        }
        h1,h3{
            margin-left:60px;
            font-weight: 500;
            
        }
        
    </style>
</head>

<body>
    <div class="back">
        @include('users.header')
    <div data-aos="fade-up">
        <h3>Have A Cake-A-Dilicious</h3>
        <h1>UP to 50% Off</h1>
        <a href="Product" class="btn btn-dark" style="margin-left:60px;">Shop Now</a></div>
    </div>  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>