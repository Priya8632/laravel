<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        .black {
            width: 100%;
            height: 60%;
        }
        .contact {
            color:black;
            font-weight:bold;
            padding: 50px;
        }
        i {
            font-size: 30px;
            padding: 0px 20px;
        }
        p{
            padding:10px;
        }
        .flot {
            float: right;
        }
        body {
            font-family: 'Nunito', sans-serif;
        }
        .back {
            background-image: url('../photos/images/c12.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            background-attachment: fixed;

        }
        .nav-item a:hover {
            color: crimson;
        }
        .nav-item a {
            font-weight: bold;
            font-size: medium;
        }
        h3 {
            color: crimson;
            margin-top: 150px;
        }
        h1 {
            color: black;
        }
        h1, h3 {
            margin-left: 60px;
            font-weight: 500;

        }
        h2{
            margin-bottom: 20px;
            color:crimson;
        }
    </style>
</head>

<body>
    <div class="back">
        @include('users.header')
        <div data-aos="fade-up">
            <h3>Have A Cake-A-Dilicious</h3>
            <h1>UP to 50% Off</h1>
            <a href="product" class="btn btn-dark" style="margin-left:60px;">Shop Now</a>
        </div>
    </div>


        <div class="black">
            <div class="contact">
                <h2>Contact Us</h2>
                <p><i class="fas fa-map-marker-alt" style="color:red;"></i>60,ishwarkrupa society,opp Archana Vidhya Bhavan
                    ,Lumbe Hanuman Road, Surat-395006. </p>
                <p><i class="fab fa-whatsapp-square" style="color:green;"></i>+91 8128166631</p>
                <p><i class="fas fa-phone-alt" style="color:blue;"></i>+91 8128166631</p>
                <p><i class="fas fa-envelope-open-text" style="color:brown;"></i>pthummar234@gmail.com</p>
                <p><i class="fa-solid fa-clock" style="color:cornflowerblue"></i>Open : 9:00 Am to 10:00 Pm,Friday closed</p>
                <div class="flot">
                    <i class="fab fa-facebook-square" style="color:rgb(17, 90, 226);"></i>
                    <i class="fab fa-twitter" style="color:rgb(63, 125, 241);"></i>
                    <i class="fab fa-instagram" style="color:crimson;"></i>
                    <i class="fab fa-linkedin" style="color:blue;"></i>
                </div>
            </div>

        </div>









    <!-- <footer>
        <div class="container">

            <div class="row p-4">
                <div class="col-3">
                    <div class="text-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header text-primary">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>