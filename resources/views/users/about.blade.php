<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>about</title>
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
            /* font-weight:600; */
        }

        .wrapper {
            width: 100%;
            overflow: hidden;
        }

        .slides-container {
            height: 600px;
            transition: 900ms cubic-bezier(0.48, 0.15, 0.18, 1);
            position: relative;
        }

        .slide-image {
            height: 100%;
            width: 100%;
            position: absolute;
        }

        .slide-image img {
            width: 100%;
            height: 100%;
            object-fit:initial;
        }

        .next-btn,
        .prev-btn {
            background-color: #eee;
            padding: 16px;
            position: absolute;
            top: 60%;
            transform: translateY(-50%);
            font-size: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
            z-index: 100;
            cursor: pointer;
            transition: 400ms;
        }

        .next-btn:hover,
        .prev-btn:hover {
            background-color: pink;
        }

        .prev-btn {
            left: 0;
        }

        .next-btn {
            right: 0;
        }

        .navigation-dots {
            display: flex;
            height: 32px;
            align-items: center;
            justify-content: center;
            margin: 16px 0;

        }

        .single-dot {
            background-color: #333;
            height: 16px;
            width: 16px;
            border: 2px solid #000;
            border-radius: 50%;
            margin: 0 8px;
            cursor: pointer;
            transition: 400ms;
        }

        .single-dot.active {
            background-color: #eee;
        }

    </style>
</head>

<body>
    <div>
        @include('users.header');
    </div>

    <div class="wrapper">

        <div class="prev-btn">
            <i class="fas fa-chevron-left"></i>
        </div>

        <div class="slides-container">
            <div class="slide-image">
                <img src="photos/images/c1.jpg" alt="">
            </div>
            <div class="slide-image">
                <img src="photos/images/c2.jpg" alt="">
            </div>
            <div class="slide-image">
                <img src="photos/images/c3.jpg" alt="">
            </div>
            <div class="slide-image">
                <img src="photos/images/c4.jpg" alt="">
            </div>
            <div class="slide-image">
                <img src="photos/images/c5.jpg" alt="">
            </div>
            <div class="slide-image">
                <img src="photos/images/c7.jpg" alt="">
            </div>
        </div>

        <div class="next-btn">
            <i class="fas fa-chevron-right"></i>
        </div>

    </div>

        <div class="navigation-dots"></div>

    <script>
        const slideimage = document.querySelectorAll(".slide-image");
        const slidescontainer = document.querySelector(".slides-container");
        const nextbtn = document.querySelector(".next-btn");
        const prevbtn = document.querySelector(".prev-btn");
        const navigationdots = document.querySelector(".navigation-dots");

        let numberofimages = slideimage.length;
        let slidewidth = slideimage[0].clientWidth;
        let currentslide = 0;


        function init() {
            slideimage.forEach((img, i) => {
                img.style.left = i * 100 + "%";
            });

            slideimage[0].classList.add("active");
            createnavigationdots();
        }
        init();

        function createnavigationdots() {
            for (let i = 0; i < numberofimages; i++) {
                const dot = document.createElement("div");
                dot.classList.add("single-dot");
                navigationdots.appendChild(dot);

                dot.addEventListener("click", () => {
                    gotoslide(i);
                });
            }
            navigationdots.children[0].classList.add("active");
        }
        //next button
        nextbtn.addEventListener("click", () => {
            if (currentslide >= numberofimages - 1) {
                gotoslide(0);
                return;
            }
            currentslide++;
            gotoslide(currentslide);
        });
        //prev button

        prevbtn.addEventListener("click", () => {
            if (currentslide <= 0) {
                gotoslide(numberofimages - 1);
                return;
            }
            currentslide--;
            gotoslide(currentslide);
        });

        function gotoslide(slidenumber) {
            slidescontainer.style.transform = "translateX(-" + slidewidth * slidenumber + "px)";

            setactiveclass();
        }

        function setactiveclass() {
            let currentactive = document.querySelector(".slide-image.active");
            currentactive.classList.remove("active");
            slideimage[currentslide].classList.add("active");

            let currentdot = document.querySelector(".single-dot.active");
            currentdot.classList.remove("active");
            navigationdots.children[currentslide].classList.add("active");

        }
    </script>


</body>

</html>