<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>ADMIN</title>
    <style>
        ul li {
            margin: 12px;
        }

        ul li a:hover {
            color: crimson;
        }

        ul li a {
            font-size: medium;
            font-weight: 600;
        }

        img {
            margin-right: 1220px;
            float: left;
        }
    </style>
</head>

<body>

    <nav>
        <ul class="nav">
            <img src="images/logo.png" height="80px" width="180px" alt="">
            <li><a class="nav-link text-danger" href="{{ url('Logout') }}">Sign out</a></li>
        </ul>
    </nav>

    <div class="container">
        <h4>{{session('admin')}}</h4>
    </div>

    <table class="table text-center">

        <thead>
            <tr class="bg-warning">
                <th colspan="12">
                    <h1>Customer's Records</h1>
                </th>
            </tr>

            <tr>
                <th class="bg-dark text-white">Id</th>
                <th class="bg-dark text-white">First Name</th>
                <th class="bg-dark text-white">Last Name</th>
                <th class="bg-dark text-white">Email</th>
                <th class="bg-dark text-white">Password</th>
                <th class="bg-dark text-white">Mobile No</th>
                <th class="bg-dark text-white">Gender</th>
                <th class="bg-dark text-white">Age</th>
                <th class="bg-dark text-white">city</th>
                <th class="bg-dark text-white">Pincode</th>
                <th class="bg-dark text-white">Hobby</th>
            </tr>
        </thead>

        <tbody>
            @foreach($records as $record)
            <tr>
                <td class="bg-light">{{$record->cust_id}}</td>
                <td class="bg-light">{{$record->first_name}}</td>
                <td class="bg-light">{{$record->last_name}}</td>
                <td class="bg-light">{{$record->email}}</td>
                <td class="bg-light">{{$record->password}}</td>
                <td class="bg-light">{{$record->mobile_no}}</td>
                <td class="bg-light">{{$record->gender}}</td>
                <td class="bg-light">{{$record->age}}</td>
                <td class="bg-light">{{$record->city}}</td>
                <td class="bg-light">{{$record->pincode}}</td>
                <td class="bg-light">{{$record->hobby}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>


</body>

</html>