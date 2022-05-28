<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        .nav-item a:hover {
            color: crimson;
        }
        .nav-item a {
            font-size: medium;
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
    @include('users.header')
    
    <div class="container-fluid">
        <div data-aos="zoom-in">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="photos/images/c4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cookies</h5>
                    <p class="card-text">Price : 7.89 $</p>
                    <a href="signup" class="btn btn-dark">Order</a>
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

<!-- second row
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
    </div>-->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>