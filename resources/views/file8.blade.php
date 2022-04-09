<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Care</title>
<!--boostrap link-->
    <link href="bootstrap.min.css" rel="stylesheet">
<!--font-icon link-->
    <link href="fontawesome-free-5.15.4-web\css\all.min.css" rel="stylesheet">
<!--css link-->
    <link rel="stylesheet" href="style.css">
<!-- jquery link -->
    <link rel="stylesheet" href="jquery.js">
    <style>
        h2,h6{
            text-align: center;
            color:rgb(85, 79, 79);
        }
        .container,.pics{
            text-align: center;
            margin-top:50px;
        }
        .galary{
            margin:10px;
        }
        .images{
            display:flex;
            margin:30px;
            justify-content: center;
            padding:20px;
        }
        .img1{
            text-align: center;
            margin:10px;
        }
        .img2{
            text-align: center;
            margin:10px;
        }
        .img3{
            text-align: center;
            margin:10px;
        }
        .img4{
            text-align: center;
            margin:10px;
        }
        h5{
            margin-top: 20px;
        }
        .footer{
            background-color: rgb(26, 25, 25);
            padding:20px;
            margin-top:30px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
            $(".container").hide();
        });
        });
    </script>
</head>
<body>
    
<!--header section start-->

<div class="container-fluid">
    <p class="logo"><span>H</span>ealth<span>C</span>are.</p>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="facility.html">Facility</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Post</a></li>
        </ul>
    </nav>
</div>

<h2>OUR GALLARY</h2>
<h6>See all our important gallary photos from below</h6>
<div class="container">
    <div class="btn-group">
        <button type="button" class="btn btn-primary" id="hide">All</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-dark">DENTAL IMPLSNTS</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-dark">ROOT CANALS</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-dark">AMALGAM FILLINGS</button>
    </div>
</div>

<!-- footer -->
<div class="footer">
    <p class="text-light">Copyright © Your Website</p>
</div>

</body>
</html>