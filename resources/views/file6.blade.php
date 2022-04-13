<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function 6</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        /*header*/
*{  margin:0;
    padding:0;
    font-family: 'Source Sans Pro', sans-serif;
    box-sizing: border-box;
}
nav{
    background-color: rgb(231, 194, 27);
}
body{
    background-color: rgb(238, 248, 248);
}

/*navigation*/
nav:after{
    content: '';
    clear:both;
    display: table;
}
div.logo{
    float:left;
    color:honeydew;
    font-size: 27px;
    padding-left: 60px;
    margin-top:23px;
}
nav ul{
    float:right;
    margin-right: 15px;
    margin-top:10px;
    padding:0;
}
nav ul li{
    list-style: none;
    display:inline-block;
    position: relative;
    font-size: 18px;
    margin: 5px 10px;
}
nav ul li a{
    display: block;
    text-decoration: none;
    font-size:16px;
    line-height: 40px;
    text-align: center;
    color:white;
    padding:8px;
}
nav ul li a:hover{
    color:black; 
}
nav ul ul{
    position:absolute;
    top:45px;
    display: none;
    left:-20px;
}
nav ul li:hover >ul{
    display:block;
}
nav ul ul li{
    width:150px;
    float:none;
    display: list-item;
    position: relative;
    margin:0;
    border-bottom: 1px solid white;
}
nav ul ul li a{
    padding:7px;
    background-color:rgb(91, 145, 135);
    margin:0;
}
nav ul ul ul li{
    position:relative;
    top:-55px;
    left:173px;
}
/*img*/
.img1{
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.6)),url(c.jpg);
    background-repeat: no-repeat;
    min-height:70vh;
    background-position: center;
    background-size: cover;
}
.text{
    color:rgb(225, 228, 228);
    top:60%;
    left:5%;
    transform:translate(-0%,-50%);
    text-align: left;
    font-size: 600%;
    position: absolute;
}
/*short term*/
h3{
    text-align: right;
    font-size:60px;
    color:grey;
    margin-right: 60px;
    margin-top: 20px;
    margin-bottom: 20px;
}
/*it*/
.center{
    display: flex;
    flex-wrap: wrap;
}
.flex{
    display:flex;
    flex-direction: row-reverse;
    margin:10px; 
}
.a{
    font-size: 20px;
    margin-right: 100px;
    margin:30px;
}
img{
    background: none;
    margin-left: 60px;
    margin-top:30px;
    object-fit: cover;
}
h2{
    color:rgb(44, 82, 83);
    margin-bottom: 20px;
}
</style>
</head>
<body>
     <!--navigation-->
     <nav>
        <div class="logo"><span style="color:black;">Surat</span> No#1</div>
        <ul>
            <li><a href="new.html">HOME</a></li>
            <li><a href="#">COURSES</a>
                <ul>
                    <li><a href="short term">SHORT TERM</a>
                        <ul>
                            <li><a href="#it for kids">IT for KIDS</a></li>
                            <li><a href="#ccc">CCC</a></li>
                            <li><a href="#">C language</a></li>
                            <li><a href="#">C++</a></li>
                            <li><a href="#">ASP.net</a></li>
                            <li><a href="#">VB.net</a></li>
                            <li><a href="#">TALLY</a></li>
                            <li><a href="#">DTP</a></li>
                        </ul>
                   </li>
                    <li><a href="#">LONG TERM</a>
                        <ul>
                            <li><a href="#">DCA</a></li>
                            <li><a href="#">DIT</a></li>
                            <li><a href="#">PGDCA</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">CCAP</a></li>
                            <li><a href="#">AUTO CAD</a></li>
                            <li><a href="#">ANDROID</a></li>
                            <li><a href="#">WEB</a></li>
                        </ul>
                    
                    </li>
                </ul>
            </li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="stud.html">STUDENTS CORNER</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="ragister.html">RAGISTER</a></li>
        </ul>
    </nav>


</body>
</html>










































































































































































































        