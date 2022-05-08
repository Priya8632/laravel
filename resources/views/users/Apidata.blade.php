<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
</head>
<body>
    
@include('users.header')
    <table class="table text-center">

        <thead>
            <tr class="bg-warning">
                <th  colspan="5" >
                    <h1>API Records</h1>
                </th>
            </tr>

            <tr>
                <th>ID</th>
                <th>FIRST_NAME</th>
                <th>LAST_NAME</th>
                <th>EMAIL</th>
                <th>AVTAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($collection as $item)
            <tr>
                <th>{{$item['id']}}</th>
                <th>{{$item['first_name']}}</th>
                <th>{{$item['last_name']}}</th>
                <th>{{$item['email']}}</th>
                <th><img src={{$item['avatar']}} height="50px" /></th>
            </tr>
            @endforeach
        </tbody>
    </table>   

</body>
</html>