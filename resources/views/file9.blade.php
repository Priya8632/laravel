<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>information</h1>
    <div class="container">
        {{count($users)}}
        @foreach($users as $user)
            @if($user == "priya")
                <h1>{{$user}}</h1>
            @else
                <h2>{{$user}}</h2>
            @endif
            @endforeach
    </div>

</body>
</html>