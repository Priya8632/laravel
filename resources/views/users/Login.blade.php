<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .container
        {
            background-color:coral;
            width:700px;
        }
        h1{
            margin-bottom:20px;
        }
        ul li a{
            color:black;
        }
        ul li a:hover{
            color:chocolate;
        }
    </style>
</head>
<body>
@include('header');
<div class="container m-3 p-5 text-dark mx-auto">
    <h1>Login Here</h1>
    <form action="Login" method="POST">
        @csrf
            <div class="form-group col-md-10">
                <label for="inputEmail4">User Name</label>
                <input type="email" class="form-control" name="username">
            </div>
            <div class="form-group col-md-10">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group col-md-10">
                <input type="checkbox">Agree term and condition
            </div>
            <div class="form-group col-md-10">
                <button type="submit" class="btn btn-dark">Sign in</button>
            </div>
    </form>
</div>
</body>

</html>