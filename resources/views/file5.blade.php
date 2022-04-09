<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Document</title>
    <style>
        /*header*/
*{  margin:0;
    padding:0;
    font-family:'Lucida Sans', sans-serif;
    box-sizing: border-box;
}
body{
    background-color:white;
}
nav{
    background-color:rgb(231, 194, 27);
}
input[type=button]{
    width:30px;
    height:20px;
    border:1px solid gray;   
}
/*navigation*/
nav:after{
    content: '';
    clear:both;
    display: table;
}
div.logo{
    float:left;
    color:white;
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
    color:black;
    padding:8px;
}
nav ul li a:hover{
    color:rgb(19, 18, 18);
    transition: all 0.1s;  
}
/*image*/
.a{
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.6)),url(b.jpg);
    background-repeat: no-repeat;
    min-height:60vh;
    background-position: center;
    background-size: cover;
    position: relative;
}
.b{
    position:absolute;
    color:white;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align: center;
    font-size: 360%;
}
@media (max-width:952px){
    .b{
        font-size: 210%;
    }
}
p{
    margin-left: 30px;
    color:rgb(214, 141, 5);
    padding:20px;
    font-size: 45px;
    text-align: center;
}
/*galary*/
.center{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    margin:20px;
    position: relative;
}
div.gallery {
    margin: 30px;
    float: left;
    width: 330px;
} 
div.gallery img,.gallery1 img {
    width: 100%;
    height:auto;
    object-fit: cover;
    transition: 1s;
}
.gallery img:hover,.gallery1 img:hover{
  transform:scale(1.1);
  z-index: 2;
}
div.desc {
    color:black;  
    font-size: 20px;
    padding:15px;
    text-align: center;   
}
#a{
    background-color: rgb(131, 206, 61);
}
#b{
    background-color:rgb(97, 181, 184);
}
#c{
    background-color:rgb(250, 208, 69);
}
#d{
    background-color:rgb(97,181,184);
}
#e{
    background-color:rgb(250, 208, 69);
}
#f{
    background-color:rgb(131, 206, 61);
}
/*project*/
/*.box {
    float: left;
}  
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.text,.text1,.text2,.text3{
    font-size: 20px;
    color:rgb(27, 26, 26);
    font-weight: bold;
    background-color:rgb(255, 215, 85);
    padding:50px;
    width:330px;
    height:250px;
    margin-left:40px;
    border-radius: 20% 0%; 
    margin-top: 30px; 
    transition: 1s;
}
.text1{
    background-color: rgb(248, 133, 56);
}
.text2{
    background-color: rgb(150, 194, 194);
}
.text3{
    background-color: rgb(170, 219, 219);
}
.text:hover,.text1:hover,.text2:hover,.text3:hover{
    transform:scale(1.1);
   z-index: 1;
}*/
/*extre*/
div.gallery1 {
    float: left;
    width: 430px;
    margin:0;
} 
div.gallery1 img {
    width: 100%;
    height:auto;
    object-fit: cover;
    transition: 1s;
}
.t,.t1,.t2{
    font-size: 20px;
    color:rgb(27, 26, 26);
    font-weight: bold;
    background-color:rgb(142, 209, 34);
    padding:50px;
    width:430px;
    height:287px;
}
.t1{
    background-color:rgb(97, 181, 184);
}
.t2{
    background-color:rgb(248, 83, 111);
}
    </style>
</head>
<body>
     <!--navigation-->
     <nav id="a1">
        <!-- <div class="logo"><span style="color:black;">Surat</span> No#1</div> -->
        <ul>
            <li><a href="new.html">HOME</a></li>
            <li><a href="courses.html">COURSES</a>
                <!--<ul>
                    <li><a href="#">SHORT TERM</a>
                        <ul>
                            <li><a href="#">IT for KIDS</a></li>
                            <li><a href="#">CCC</a></li>
                            <li><a href="#">TALLY</a></li>
                            <li><a href="#">DTP</a></li>
                            <li><a href="#">C language</a></li>
                            <li><a href="#">C++</a></li>
                            <li><a href="#">ASP.net</a></li>
                            <li><a href="#">VB.net</a></li>
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
                            <li><a href="#">WEBDESIGN & DEVELOP</a></li>
                        </ul>
                    
                    </li>
                </ul>-->
            </li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="#">STUDENTS CORNER</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="ragister.html">RAGISTER</a></li>

        </ul>
        <ul style="float: left;margin:15px;border:1px solid black;padding:10px;border-radius: 10%;">
            <span><> VIEW CODE</span>
        </ul>
        <ul style="float: left;background-color: rgb(240, 236, 236);padding: 10px;margin:15px;border-radius:10%;">
        <input type="button"  style="background-color: palegreen;border-radius: 50%;" onclick="check()">
        <input type="button" style="background-color: cadetblue;border-radius: 50%;" onclick="check1()">
        <input type="button"  style="background-color:pink;border-radius: 50%;" onclick="check2()">
        </ul>
        
 
 
    </nav>
<!--button-->
<script>
    function check(){
        
        document.getElementById("a1").style.backgroundColor = "palegreen";
    }
    function check1(){
        document.getElementById("a1").style.backgroundColor = "cadetblue";
    }
    function check2(){
        document.getElementById("a1").style.backgroundColor = "pink";
    }
</script>
<!-- <input type="button" value="red" onclick="check()">
<input type="button" value="blue" style="background-color: blue;" onclick="check1()">
<input type="button" value="green" style="background-color:green;" onclick="check2()"> -->



<!--image-->    
<div class="a">
    <div class="b">
        <span>Students Corner</span>
    </div>
</div>
<!--placement-->
<div>
    <p>Students Placement:</p>
        <div class="center">
            <div class="gallery">
                  <img src="s1.jpg">
                    <div class="desc" id="a"><h3>Mr. John Doe</h3> Web developer<br>New Delhi</div>
            </div>
            <div class="gallery">
                <img src="s2.jpg">
                    <div class="desc" id="b"><h3>Ms.Shishuka</h3> Application developer<br>Mumbai </div>
            </div>
            <div class="gallery">
                <img src="s3.jpg">
                    <div class="desc" id="c"><h3>Ms. Rani Gaytri</h3>Graphics Design<br>Pune</div>
            </div>
            <div class="gallery">
                    <img src="s5.jpg">
                        <div class="desc" id="d"><h3>Ms.Shtefi</h3>Application developer<br>Kolkata</div>
            </div>
            <div class="gallery">
                <img src="s9.jpg">
                        <div class="desc" id="e"><h3>Mr.ghothek</h3>Web developer<br>Cheenai</div>
            </div>
            <div class="gallery">
                <img src="s6.jpg">
                        <div class="desc" id="f"><h3>Mr.Panchal</h3>Graphics Design<br>Mumbai</div>
            </div>
        </div>
</div>
<!--projects
<div>
    <p>Students Projects:</p>
    <div class="clearfix">
        <div class="center">
        <div class="box" >
            <h3 class="text">1.<br><br> Covid-19<br> Hospital Management<br> System in  Java</h3>
        </div>
        <div class="box">
            <h3 class="text1">2.<br><br> Online Assignment Submition<br> system in Java </h3>
        </div>
        <div class="box">
            <h3 class="text2">3.<br><br> Employee Management <br> System in PHP</h3>
        </div>
        <div class="box">
            <h3 class="text3">4.<br><br> Coffee Shope Management <br> System in VB.NET</h3>
        </div>
        <div class="box">
            <h3 class="text">5.<br><br> Attendance Management <br> System in VB.NET  </h3>
        </div>
        <div class="box">
            <h3 class="text1">6.<br><br> Women Safety App <br> System in Android</h3>
        </div>
        <div class="box">
            <h3 class="text2">7.<br><br> Andriod Based Voting <br> System in Andriod</h3>
        </div>
        <div class="box">
            <h3 class="text3">8.<br><br> Online Grocery Store <br> in PHP</h3>
        </div>
        
         </div>          
    </div>
</div>-->
<div>
    <p>Students Projects</p>
    <div class="center">
        <div class="gallery1">
            <h3 class="t">1.<br><br> Online Assignment Submition<br> system in Java</h3>
        </div>
        <div class="gallery1">
            <img src="java1.jpg">
        </div>
        <div class="gallery1">
            <h3 class="t1">2.<br><br> Andriod Based Voting <br> System in Andriod</h3>
        </div>
        <div class="gallery1">
            <img src="java2.jpg">
        </div>
        <div class="gallery1">
            <h3 class="t2">3.<br><br> Attendance Management <br> System in VB.NET</h3>
        </div>
        <div class="gallery1">
            <img src="java.jpg">
        </div>
    </div>
</div>



</body>
</html>