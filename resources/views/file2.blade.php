<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    form{
        display:none;
    }
</style>
<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="#" class="nav-link text-light">HOME</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light">ABOUT US</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light">LOGIN</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light">CONTACT</a></li>
        </ul>
        <button class="badge badge-pill badge-info p-2" style="float:right;" id ="btn">SIGN IN</button>
    </nav>

    <script>
        $(document).ready(function()
        {
            $("#btn").click(function()
            {
                $(".form").slideDown(1500);
            });
        });


    </script>

<div class="container bg-success text-light">
    <form style="margin-top:30px;padding:40px;" class="form">
        <div class="form-row">
        <div class="form-group col-12">
            <label for="">full name</label>
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="inputAddress" placeholder="first name">
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="inputAddress" placeholder="middle name">
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="inputAddress" placeholder="last name">
        </div>
        
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="abc@gmail.com">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Sign in</button>
    </form>
</div>
</body>

</html>