<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <style>
        body {
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;

        }
        ul li{
            margin:12px;
        }
        ul li a:hover{
            color:crimson;
        }
        ul li a {
            font-size:medium;
        }
    </style>
</head>

<body>

        @include('users.header');
        <div>
            <h1>{{session('user')}}</h1>
            <a href="/logout">logout here</a>
            <a href="/logind">login here</a>

        </div>
        
        <div>
            <table>

                <thead>
                    <tr>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>

                <!-- <tbody>
                    @foreach($user as $users)
                    <tr>
                        <td>{{$users->first_name}}</td>
                        <td>{{$users->last_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->password}}</td>
                    </tr>
                    @endforeach
                </tbody> -->
            </table>
        </div>
</body>
</html>