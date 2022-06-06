<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>update</title>
    <style>
         .nav-item a:hover {
            color: crimson;
        }
        .nav-item a {
            font-size: medium;
        }
        .container {
            background-color: plum;
        }
    </style>
</head>


@foreach($data as $detail)
@endforeach

<body>
    
    @include('users.header')

    <div class="container m-3 p-5 text-dark mx-auto">

        <form method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}

            <h1 class="p-2">Update Details</h1>

            <div class="row">
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input type="text" name="first_name" class="form-control" value="{{$detail->first_name}}">
                        <small class="form-text  text-dark"> @error('first_name'){{$message}} @enderror </small>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="">Lastname</label>
                        <input type="text" name="last_name" class="form-control" value="{{$detail->last_name}}">
                        <small class="form-text  text-dark"> @error('last_name'){{$message}} @enderror </small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{$detail->email}}">
                    <small class="form-text text-dark"> @error('email'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="{{$detail->password}}">
                    <small class="form-text text-dark"> @error('password'){{$message}} @enderror </small>
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control">
                    <small class="form-text text-dark"> @error('confirm_password'){{$message}} @enderror </small>
                </div> -->
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="">Mobile no</label>
                    <input type="text" name="mobile_no" class="form-control" value="{{$detail->mobile_no}}">
                    <small class="form-text text-dark"> @error('mobile_no'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Gender</label><br>
                    <input type="radio" name="gender" value="male" @if($detail->gender =='male' ) checked @endif>Male
                    <input type="radio" name="gender" value="female" @if($detail->gender =='female' ) checked @endif>Female
                    <input type="radio" name="gender" value="others" @if($detail->gender =='others' ) checked @endif>Others
                    <small class="form-text text-dark"> @error('gender'){{$message}} @enderror </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Age</label>
                    <input type="text" name="age" class="form-control" value="{{$detail->age}}">
                    <small class="form-text text-dark"> @error('age'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">City</label>
                    <select name="city" id="" class="form-control">
                        <option value="Surat" >Surat</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Amreli">Amreli</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Valsad">Valsad</option>
                    </select>
                    <small class="form-text text-dark"> @error('city'){{$message}} @enderror </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Pincode</label>
                    <input type="text" name="pincode" class="form-control" value="{{$detail->pincode}}">
                    <small class="form-text text-dark"> @error('pincode'){{$message}} @enderror </small>
                </div>
            </div>

            <label for="">Hobby</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="hobby[]" id="reading" value="reading" @if(str_contains($detail->hobby ,'reading' )) checked @endif>
                <label for="reading" class="form-check-label">Reading</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="hobby[]" id="writing" value="writing" @if(str_contains($detail->hobby ,'writing' )) checked @endif>
                <label for="writing" class="form-check-label">Writing</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="hobby[]" id="playing" value="playing" @if(str_contains($detail->hobby ,'playing' )) checked @endif>
                <label for="playing" class="form-check-label">Playing</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="hobby[]" id="cooking" value="cooking" @if(str_contains($detail->hobby ,'cooking' )) checked @endif>
                <label for="cooking" class="form-check-label">Cooking</label>
            </div>
            <small class="form-text text-dark"> @error('hobby'){{$message}} @enderror </small>

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
                <button type="submit" class="btn btn-dark">Update</button>
                <button type="reset" class="btn btn-danger">Cancle</button>
            </div>
        </form>
    </div>
    
</body>
</html>
