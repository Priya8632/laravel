<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Product</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        img {
            margin-right: 900px;
        }
        ul li {
            margin: 10px;
        }

        ul li a:hover {
            color: crimson;
        }

        ul li a {
            font-size: medium;
            color:black;
        }

        .container-fluid {
            display: flex;
            padding: 50px;
        }

        .card {
            margin: 29px;
            text-align: center;
        }
    </style>
</head>

<body>

    <nav>
        <ul class="nav">
            <img src="photos/images/logo.png" height="80px" width="180px" alt="">
            <li class="nav-item"><a href="home" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="about" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="user_product" class="nav-link">SHOP</a></li>
            <li><a class="nav-link text-danger" href="{{ url('logout') }}">SIGN OUT</a></li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div data-aos="zoom-in">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="photos/images/c4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cookies</h5>
                    <p class="card-text">Price : 7.89 $</p>
                    <a href="info" class="btn btn-dark">Order</a>
                </div>
            </div>
        </div>

        <div data-aos="zoom-out">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="photos/images/c6.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Chocolate</h5>
                    <p class="card-text">Price : 6.23 $</p>
                    <a href="info" class="btn btn-dark">Order</a>
                </div>
            </div>
        </div>

        <div data-aos="fade-left">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="photos/images/c7.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black-forest</h5>
                    <p class="card-text">Price : 8.23 $</p>
                    <a href="info" class="btn btn-dark">Order</a>
                </div>
            </div>
        </div>

        <div data-aos="fade-right">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="photos/images/c8.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black-forest</h5>
                    <p class="card-text">Price : 9.00 $</p>
                    <a href="info" class="btn btn-dark">Order</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>