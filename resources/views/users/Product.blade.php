<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        ul li a:hover {
            color: chocolate;
        }
        body{
            background-color:burlywood;
        }
    </style>
</head>

<body>
    @include('users.header')
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Strobery</h5>
            <p class="card-text">Price : 8.23 $</p>
            <a href="#" class="btn btn-primary">Order</a>
        </div>
    </div>

</body>

</html>