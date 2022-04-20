<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>

<body>


    @include('header')

   
    <div class="container m-3 p-5 bg-success text-dark">

        <form action="userForm" method="POST">
            @csrf
            <div class="form-group">
                <label for="">username</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <div class="form-group">
                <label for="">confirm password</label>
                <input type="password" name="c_pass" class="form-control">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">mobile no</label>
                <input type="text" name="mob" class="form-control">
            </div>
            <div class="form-group">
                <label for="">age</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
                <input type="checkbox">Agree term and condition
            </div>
            <div class="form-group">
                <button class="btn btn-dark">submit</button>
            </div>
        </form>
    </div>

    



</body>

</html>