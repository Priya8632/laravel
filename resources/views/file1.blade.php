<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container m-3 p-5 bg-info">

<form action="">
    <div class="form-group">
        <label for="">username</label>
        <input type="text" name="name" value="{{$info}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">password</label>
        <input type="password" name="pass" value="{{$info}}" class="form-control">
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