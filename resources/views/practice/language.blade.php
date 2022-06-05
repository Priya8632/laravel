<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>{{__('product.userName')}}</h1>
    <h2>{{__('product.Details')}}</h2>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container-fluid">
            <div class="d-flex flex-grow-1">
                <a href="" class="navbar-brand">Localization</a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar7">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="mynavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item text-white p-2"><a href="" class="btn text-white">gallary</a></li>
                        <li class="nav-item text-white p-2"><a href="" class="btn text-white">contact</a></li>
                        <li class="nav-item text-white p-2"><a href="" class="btn text-white">about</a></li>
                        <li class="nav-item text-white p-2"><a href="" class="btn text-white">services</a></li>
                        <li class="nav-item text-white p-2"><a href="" class="btn text-white">login</a></li>
                        <li class="nav-item text-white p-2"><a href="" class="btn text-white">ragister</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle text-danger" id="navbarDropdown" role="button" data-toggle="dropdown">Language</a>
                            <div class="dropdwon-menu" aria-labelledby="navbarDropdown">
                                <a href="locale/en" class="dropdown-item">English</a>
                                <a href="locale/ge" class="dropdown-item">German</a>
                                <a href="locale/gu" class="dropdown-item">Gujarati</a>
                                <a href="locale/hi" class="dropdown-item">Hindi</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>