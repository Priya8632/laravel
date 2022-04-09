<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        /*header*/
*{  margin:0;
    padding:0;
    font-family:'Lucida Sans';
    box-sizing: border-box;
}
.header{
        min-height: 70vh;
        background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.3)), url(b3.jpg);
        background-position: center;
        background-size: cover;    
}
body{
    background-color:white;
}
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
    padding:8 15px;
    display: block;
    text-decoration: none;
    font-size:16px;
    line-height: 40px;
    text-align: center;
    color:white;
    padding:8px;
}
nav ul li a:hover{
    color:rgb(58, 60, 63);
}/*
nav ul ul{
    position: absolute;
    top:37px;
    display: none;
    left:-20px;
}
nav ul li:hover >ul{
    display: block;
}
nav ul ul li{
    width:150px;
    float:none;
    display: list-item;
    position: relative;
    margin: 0px;
}
nav ul ul li a{
    padding:10px;
    margin: 0px;
}
nav ul ul ul li{
    position:relative;
    top:-50px;
    left:173px;
}
/*contain*/
div.a{
    top:54%;
    left:30%;
    transform:translate(-50%,-50%);
    text-align: center;
    position: absolute;
}
div.a1{
  text-align: left;  
  top:39%;
  left:14%;
  transform:translate(-50%,-50%);
  text-align: center;
  position: absolute;

}
.contain h1{
    font-size: 37px;
    color:white;
}
.contain p{
    margin:15px 0 40px;
    font-size: 15px;
    color:cornsilk;
}
/*galary*/
.center{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin:30px;
}
div.gallery {
    margin: 8px;
    float: left;
    width: 300px;
    background-color: cadetblue;
} 
div.gallery:hover {
    border:1px solid cadetblue;
} 
div.gallery img {
    width: 100%;
    height:auto;
    object-fit: cover;
    border:1px solid gray;

}
/*.overlay{
    position: absolute;
    bottom:0;
    top:0;
    left:0;
    right:0;
    height:100%;
    background-color:rgb(185,204,204);
    overflow: hidden;
    width:100%;
    transition: .5s ease;
    opacity:0;

}
.gallery:hover .overlay{
    bottom:0;
    height:100%;
    opacity:1;

}*/
div.desc {
    color:black;
    font-size: 20px;
    padding:15px;
    text-align: center;    
}
/*choose*/
span{
    text-align: center;
    font-size: 5vh;
    color:rgb(19, 18, 18);
}
.fa-circle{
    font-size: 10px;
    padding:10px;
    color:rgb(19, 18, 18);
}
.flex-container {
    display: flex;
    flex-direction: column;
} 
.flex-container > div {
    background-color:rgb(85, 156, 158);
    margin: 40px;
    padding: 40px;
    font-size: 20px;
    color:white; 
}
@media (min-width:952px){
    .flex-container{
        flex-direction: row;
    }
}
/*footer*/
div.p{
    width:100%;
    background-color: rgb(27, 22, 22);
    padding:20px;
    margin:0;
}
h2{
    color:white;
    text-align: center;
}
p{
    color:rgb(20, 168, 168);
    text-align: center;
    padding-top: 5px;
}
h3{
    padding:15px;
    text-align: center;
    color:red;
    background-color: black;
}

    </style>
</head>
<body>

<!--navigation-->
    <nav class="header">
        <!-- <div class="logo"><span style="color:black">Surat</span> No#1</div> -->
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="courses.html">COURSES</a>
               
            </li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="stud.html">STUDENTS CORNER</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="ragister.html">RAGISTER</a></li>
        </ul>
</nav>

<div class="contain">
    <div class="a1">
    <span style="font-size: 70px;color:white;">Surat</span>&nbsp;&nbsp;
    <span style="font-size: 35px;color:white;">No1</span></div>
    <div class="a">
    <h1>Multimedia Education Institute in Surat</h1>
    <p> Angel Multimedia Institute is an award-winning Multimedia Institute in Surat. We serve with a wide range of<br>
        information technology course along with certificate knowledge. ISO certificate(AICE) training Institute providing<br>
        100% practical training along with job guarantee.  </p></div>
</div>


<!-- choose-->
<div class="center">
    <span>Why Choose Angel Multimedia Education</span>
 <div class="flex-container">
    <div>
        <i class="fas fa-circle"></i>Free Demo Sessions<br>
        <i class="fas fa-circle"></i>100% Job Placement(Unlimited interview calls)<br>
        <i class="fas fa-circle"></i>Students Trained 18000+<br>
        <i class="fas fa-circle"></i>Job placement Done 3800+ Candidates<br>
        <i class="fas fa-circle"></i>100% Live Project Work<br>
        <i class="fas fa-circle"></i>Get Intership Letter<br>
        <i class="fas fa-circle"></i>Free Domain and Hosting<br>
        <i class="fas fa-circle"></i>Surprise test
    </div>
    <div>
        <i class="fas fa-circle"></i>Company visit<br>
        <i class="fas fa-circle"></i>Day & Events<br>
        <i class="fas fa-circle"></i>Special Discount For Groups<br>
        <i class="fas fa-circle"></i>interview Preparation & Mock interview<br>
        <i class="fas fa-circle"></i>Get sample Resume<br>
        <i class="fas fa-circle"></i>Special Focus On Personality Development & soft Skills;<br>
        <i class="fas fa-circle"></i>FREE Life Time Training Access<br>
        <i class="fas fa-circle"></i>Compact batch Size (5-10 Students Only)<br>
        <i class="fas fa-circle"></i>Flexible Timings<br>
        <i class="fas fa-circle"></i>Weekend and Weekdays Batches  
    </div>
</div>
</div>
<div class="p">
        <h2>Watch Our Students Reviews</h2>
        <p>You Tube video for students review</p>
</div>
<div>
    <h3>True Reviews By Read Students</h3>
</div>



</body>
</html>