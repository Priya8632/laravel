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
        .container {
            background-color: plum;
        }

        h1 {
            /* margin-bottom:20px; */
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

    @include('users.header')

    <div class="container m-3 p-5 text-dark mx-auto">

        <form action="userForm" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="p-2">Ragistration Form</h1>

            <div class="row">
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                        <small class="form-text  text-dark"> @error('first_name'){{$message}} @enderror </small>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="">Lastname</label>
                        <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                        <small class="form-text  text-dark"> @error('last_name'){{$message}} @enderror </small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    <small class="form-text text-dark"> @error('email'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="{{old('password')}}">
                    <small class="form-text text-dark"> @error('password'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control" value="{{old('confirm_password')}}">
                    <small class="form-text text-dark"> @error('confirm_password'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="">Mobile no</label>
                    <input type="text" name="mobile_no" class="form-control" value="{{old('mobile_no')}}">
                    <small class="form-text text-dark"> @error('mobile_no'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Gender</label><br>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Others
                    <small class="form-text text-dark"> @error('gender'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Age</label>
                    <input type="text" name="age" class="form-control" value="{{old('age')}}">
                    <small class="form-text text-dark"> @error('age'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">City</label>
                    <select name="city" id="" class="form-control">
                        <option value="Surat">Surat</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Amreli">Amreli</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Valsad">Valsad</option>
                    </select>
                    <small class="form-text text-dark"> @error('city'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Pincode</label>
                    <input type="text" name="pincode" class="form-control" value="{{old('pincode')}}">
                    <small class="form-text text-dark"> @error('pincode'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Hobbies</label><br>
                    <input type="checkbox" name="hobby[]" value="Reading">Reading<br>
                    <input type="checkbox" name="hobby[]" value="Writing">Writing<br>
                    <input type="checkbox" name="hobby[]" value="Playing">Playning<br>
                    <input type="checkbox" name="hobby[]" value="Cooking">Cooking<br>
                    <small class="form-text text-dark"> @error('hobby'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Photo</label>
                    <input type="file" name="image">
                    <small class="form-text text-dark"> @error('image'){{$message}} @enderror </small>
                </div>
            </div>

           <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" name="folderCkeck" id="folderCkeck">
                <label for="folderCkeck" class="form-check-label">Want you store image in spacific folder?</label>
            </div>

            <div class="form-group">
                <label for="folderName">Folder Name</label>
                <input type="text" class="form-control" name="folderName" id="folderName" disabled>
            </div>

            <div class="form-group">
                <small> @error('fileName'){{$message}} @enderror </small>
                <select name="fileName" class="form-control" id="">
                    <option value="" selected disabled>--Select Name Of Image</option>
                    <option value="original">Original Name</option>
                    <option value="random">Random Name</option>
                </select>
            </div> -->

            <div class="form-group">
                <input type="checkbox">Agree term and condition<br>
                <a href="login" style="color:blue;">Alredy have an Account</a>
            </div>
            <div class="form-group">
                <button type="submit"class="btn btn-dark">Submit</button>
                <button type="reset" class="btn btn-danger">Cancle</button>
            </div>
        </form>
    </div>
    <script>
        let checkBox = document.getElementById("folderCkeck");
        let folder_name = document.getElementById("folderName");

        checkBox.addEventListener('click', () => {

            folder_name.disabled = false;

        });
    </script>


</body>

</html>