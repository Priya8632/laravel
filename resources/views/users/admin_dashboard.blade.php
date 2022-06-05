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
        .nav-item a:hover {
            color: crimson;
        }

        .nav-item a {
            font-size: medium;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <ul class="nav">
            <img src="photos/images/logo.png" height="80px" width="180px" alt="" style="float:left;margin-right:1220px;">
            <li class="nav-item"><a class="nav-link text-danger" href="{{ url('logout') }}">SIGN OUT</a></li>
        </ul>
    </nav>

    <div class="container-fluid">
        <h4>{{session('admin')}}</h4>
    </div>

    <table class="table text-center">

        <thead>
            <tr class="bg-warning">
                <th colspan="14">
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
                <th class="bg-dark text-white">Image</th>
                <th class="bg-dark text-white">Delete</th>
                <th class="bg-dark text-white">Update</th>
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
                <td class="bg-light"><img src="{{ asset($record->image) }}" width="100" height="75" alt="not connect"> </td>
                <td class="bg-light"><a href="delete/{{$record->cust_id}}" onclick = "delete_record('{{$record->cust_id}}')"class="btn btn-danger">Delete</a></td>
                <td class="bg-light"><a href="edit/{{$record->cust_id}}" class="btn btn-success">Update</a></td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <script>
        function delete_record(cust_id) {

            let confirmation = confirm('Are you sure to delete this record?');
            if (confirmation === false) {
                window.location.replace('delete/' +cust_id);
            }
        }
    </script>

</body>

</html>