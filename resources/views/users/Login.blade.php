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
        .container {
            background-color: plum;
            width: 700px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .nav-item a:hover {
            color: crimson;
        }

        .nav-item a {
            font-size: medium;
        }
    </style>
</head>

<body>
    @include('users.header');

    <div class="col-lg-4 mx-auto">
        @if(session('status'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('status')}}
        </div>
        @endif
    </div>
    <div class="container m-3 p-5 text-dark mx-auto">
        <h1>Login Here</h1>
        <form action="login" method="POST">
            @csrf
            <div class="form-group col-md-10">
                <label for="inputEmail4">User Name</label>
                <input type="text" class="form-control" name="email">
                <small class="form-text  text-dark"> @error('email'){{$message}} @enderror </small>
            </div>
            <div class="form-group col-md-10">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password">
                <small class="form-text  text-dark"> @error('password'){{$message}} @enderror </small>
            </div>
            <div class="form-group col-md-10">
                <input type="checkbox" id="check" class="input-type-check">Agree term and condition<br>
                <a href="signup" style="color:blue;">Don't have an account</a>
            </div>
            <div class="form-group col-md-10">
                <button type="submit" class="btn btn-dark" onclick="signin()">Sign in</sbutton>
                <button type="reset" class="btn btn-danger">Cancle</button>
            </div>
        </form>
    </div>
    <!-- <script>
        let checkbox = document.getElementById("check");
        let signin = document.getElementById("signin");

        checkBox.addEventListener('click', () => {

            signin.disabled = false;

        });
    </script> -->
    <script>
        function signin()
        {
            //
        }
    </script>
</body>

</html>