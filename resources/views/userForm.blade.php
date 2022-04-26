<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container
        {
            background-color:coral;
            
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


    @include('header')

   
    <div class="container m-3 p-5 text-dark mx-auto">

        <form action="userForm" method="POST">
            @csrf
            <h1>Ragistration Form</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="">Firstname</label>
                    <input type="text" name="first_name" class="form-control">
                    <small class="form-text  text-dark"> @error('first_name'){{$message}} @enderror </small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="">Lastname</label>
                    <input type="text" name="last_name" class="form-control">
                    <small class="form-text  text-dark"> @error('last_name'){{$message}} @enderror </small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="">Email address</label>
                    <input type="text" name="email" class="form-control">
                    <small class="form-text text-dark"> @error('email'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    <small class="form-text text-dark"> @error('password'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Confirm password</label>
                    <input type="password" name="confirm password" class="form-control">
                    <small class="form-text text-dark"> @error('confirm password'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="">Mobile no</label>
                    <input type="text" name="mobile no" class="form-control">
                    <small class="form-text text-dark"> @error('mobile no'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Gender</label><br>
                    <input type="radio"  name="gender">Male
                    <input type="radio"  name="gender">Female
                    <input type="radio"  name="gender">Others

                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Age</label>
                    <input type="text" name="age" class="form-control">
                    <small class="form-text text-dark"> @error('age'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">City</label>
                    <select name="city" id="" class="form-control">
                        <option value="">Surat</option>
                        <option value="">Rajkot</option>
                        <option value="">Amreli</option>
                        <option value="">Vadodara</option>
                        <option value="">Valsad</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Pincode</label>
                    <input type="text" name="pincode" class="form-control">
                    <small class="form-text text-dark"> @error('pincode'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Hobbies</label><br>
                    <input type="checkbox" name="hobby">Reading<br>
                    <input type="checkbox" name="hobby">Writing<br>
                    <input type="checkbox" name="hobby">Playning<br>
                    <input type="checkbox" name="hobby">Cooking<br>
                    <small class="form-text text-dark"> @error('hobby'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox">Agree term and condition
            </div>
            <div class="form-group">
                <button class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>

    



</body>

</html>