<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /*.gradient-custom {
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
        body {
            background: linear-gradient(320deg, #2080b9, #8e44ad);
            height: 100vh;
            overflow: hidden;
            font-family: montserrat;
        }
        .center{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:400px;
            background-color: white;
            border-radius: 10px;
        }
        .center h1{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .txt_field{
            position: relative;
            border-bottom: 2px solid #adadad;
            margin:30px 0;
        }
        .txt_field input{
            width:100%;
            padding:0 5px;
            height:40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }
        .txt_field label{
            position: absolute;
            top:50%;
            left:5px;
            color:#adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .txt_field span::before{
            content: '';
            position: absolute;
            top:40px;
            left:0;
            width:0%;
            height:2px;
            background: #2691d9; 
            transition: .5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label
        {
            top:-5px;
            color:#2691d9;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before
        {
            width:100%;
        }
        .pass{
            margin: -5px 0 20px 5px;
            color:#a6a6a6;
            cursor: pointer;
        }
        .pass:hover{
            text-decoration: underline;

        }
        input[type="submit"]{
            width:100%;
            height:50px;
            border: 1px solid;
            background-color: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color:#e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline:none;
        }
        input[type="submit"]:hover{
            border-color: #2691d9;
            transition: .5s;
        }
        .signup_link{
            margin:30px 0;
            text-align: center;
            font-size: 16px;
            color:#666666;
        }
        .signup_link a{
            color:#2691d9;
            text-decoration: none;
        }
        .signup_link a:hover{
            text-decoration: underline;
        }*/
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

    <!-- online design
    <section class="vh-100 gradient-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <form action="login" method="post">
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email"/>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="password"/>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>-->



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
                <button type="submit" class="btn btn-dark">Sign in</button>
                <button type="reset" class="btn btn-danger">Cancle</button>
            </div>
        </form>
    </div>




    <!-- <div class="center">
        <h1>Login</h1>
        <form action="login" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label for="">Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label for="">Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Submit">
            <div class="signup_link">
                not a memeber? <a href="#">Sign UP</a>
            </div>
        </form>
    </div> -->
</body>

</html>