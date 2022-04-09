<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        /*header*/
*{  margin:0;
    padding:0;
    font-family:'Lucida Sans', sans-serif;
    box-sizing: border-box;
}
nav{
    background-color: rgb(231, 194, 27);
}
body{
    background-color: rgb(235, 243, 243);
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
    padding:8 15px;
    display: block;
    text-decoration: none;
    font-size:16px;
    line-height: 40px;
    text-align: center;
    color:ghostwhite;
    padding:8px;

}
nav ul li a:hover{
    color:rgb(19, 18, 18);   
}

/*image*/
.a{
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(a.jpg);
    background-repeat: no-repeat;
    min-height:60vh;
    background-position: center;
    background-size: cover;
    position: relative;
}
.b{
    position:absolute;
    color:rgb(225, 228, 228);
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align: center;
    font-size: 360%;
}
/*about*/
.center{
    flex-wrap: wrap;
    justify-content: center;
}
p.i{
    color:rgb(5,100,95);
    font-size: 47px;
    text-align: center;
    margin:5px;
    padding:25px;
}
.img1{
    justify-content: center;
    display:flex; 
}
img{
    border-radius: 50%;
    object-fit: cover;
}
.container{
    display: flex;
    flex-direction:row;
    margin-top: 50px;
    justify-content: center;
}
.container > div{
    padding: 90px;
    font-size: 18px;
    width:550px;
    height:330px;
}
.container >div.c{
    background-color:rgb(231, 160, 27);
    color:white;
}
.container >div.d{
    background-color:rgb(185, 204, 204);
    color:black;
}
@media (max-width:952px){ 
    .container > div{
        width:300px;
        height:450px;
        padding:45px;
        font-size: 15px;
    }
}

/*why*/
h1{ 
    color:rgb(5,100,95);
    font-size: 60px;
    font-weight: normal;
    margin:3%;
    margin-left: 15%;
}
span.e{
    display:flex;
    font-size: 20px;
    color:rgb(32, 30, 30);
    background-color: rgb(185, 204, 204);
    padding:50px;
}

/*awards*/

    </style>
</head>
<body>
    
    <!--navigation-->
    <nav>
        <div class="logo"><span style="color:black;">Surat</span> No#1</div>
        <ul>
            <li><a href="new.html">HOME</a></li>
            <li><a href="courses.html">COURSES</a>
            </li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="stud.html">STUDENTS CORNER</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="ragister.html">RAGISTER</a></li>
        </ul>
    </nav>
<!--image-->    
<div class="a">
    <div class="b">
        <span>About Us</span>
    </div>
</div>

<!--about-->
<div class="center">
    <p class="i">About Angel Multimedia Education</p>
    <div class="img1">
    <img src="college.png" height="200px" width="260px">
    </div>

    <div class="container">
        <div class="d">
            ANGEL Multimedia Education, one of the leading institute, established in 2010 and also an AICE
            (All india Computer Education) certified  computer training institute as well as computer classes.
        </div>
        <div class="c">
            Angel Computer Education a reliable academic institution that was established in 2010 with a view to providing
            know how and training  meant for Web Designing / Development , Graphics Designing, Video Editing , Mobile
            Development ,Digital Marketing ,Computer based  Accounting & basic operatimg.
        </div>
    </div>
</div>

<!--why-->
<div>
    <h1>Why we are Best:</h1>       
        <span class="e">
            "Angel computer education" pleasure to share that we are being AICE (All india computer Education) & Goverment 
            Authorize training Center Established in 2010 City of surat. Our academy has an exclusive team of training
            specialists to cater the demands of ever growing IT industry. We also being an IT solutions provider our 
            process of training of Students at various levels are comparatively very faster and highly refined than any other training
            institute.in this competitive era, with many engineering colleges coming up, one has to be better than the other in terms of
            quality of education provided, the infrastructure avaliable and last but not the least, the training & Placement provided
            to the students must have an upper edge over others so as to create a strong brand name in the education sector. 
        </span>    
</div>

<!--Awards
<div>
    <div class="g">
        <div>
             <p class="h">An Award is a prize or certificate that a person is given for doing something well.
                    An Award is a prize or certificate that a person is given for doing something well.
                    An Award is a prize or certificate that a person is given for doing something well.
                    An Award is a prize or certificate that a person is given for doing something well.
                    An Award is a prize or certificate that a person is given for doing something well.
             </p>
        </div>
        <div >
        <img src="award.jpg" height="500px" width="600px" style="border-radius:8px;object-fit:fill;margin-top: 40px;
                                                                 margin-left: 100px;">
        </div>
    </div>


</div>-->

</body>
</html>