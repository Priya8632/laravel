<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        ul {
            list-style-type: none;
            float: right;
        }

        ul li {
            display: inline-block;
            margin-top: 20px;
        }

        ul li a {
            text-decoration: none;
            color: black;
            padding: 10px 20px;
            border: 1px solid black;
            transition: 0.6s ease;
        }

        ul li a:hover {
            background-color:black;
            color:white;
            text-decoration: none;
        }

        .container {
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <header>
        <div class="main">
            <div class="logo">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Gallary</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>
    <div class="text">
        <h1>ANGEL</h1>
    </div>
    <div class="container bg-dark p-3">
        <p class="alert text-warning">hello goodmorning.....</p>
        <!-- <img src="./image.jpg"> -->
        <p class="alert text-warning">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, debitis!
        </p>
    </div>
    <div class="container">
    <div class="card">
        <div class="card-header bg-dark text-warning">
            Quote
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer"><cite title="Source Title" class="text-warning">ANGLE MULTIMEDIA EDUCATION</cite></footer>
            </blockquote>
        </div>
    </div>
    </div>
</body>

</html>