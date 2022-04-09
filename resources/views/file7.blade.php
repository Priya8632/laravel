<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
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
    background-color: rgb(238, 245, 245);
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
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(contact2.jpg);
    background-repeat: no-repeat;
    min-height:70vh;
    background-position: center;
    background-size: cover;
    position: relative;
}
.b{
    position:absolute;
    color:rgb(225, 228, 228);
    top:40%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align: center;
    font-size: 360%;
}
/*form*/
.center{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    background-color:#e5eeee;
    position: relative;
}
.d{
    background-color:cadetblue;
    padding:40px;
    width:900px;
    margin:-70px;
    position: absolute;
}
h2{
  margin:0px 0px 20px; 
  text-align: center;
}
input[type=text]{
    height:45px;
    width:450px;
    text-align: center;  
    border:none;
    color:rgb(24, 85, 87);
    margin-left: 180px;
}
input{
    margin:12px;
}
input[type=message]
{
    height:110px;
    width:450px;
    text-align: center;
    border:none;
    color:rgb(24, 85, 87);
    margin-left: 180px;
}
input[type=button]{
    height:45px;
    width:450px;
    background-color:rgb(231, 177, 27);
    color:black;
    margin:20px 180px;
    border:none;
    font-size: 20px;
    border-radius: 5px;
}
/* p{
    font-size: 18px;
    margin:20px;
    color:rgb(15, 15, 15);
}

@media (max-width:952px){
    .b{
        font-size: 250%;
    }
    .flex-container{
        margin:40px;
    }
    h2{
        margin:5px;
    }
    input[type=message]{
        width:180px;
        margin-left: 5px;
    }
    input{
        margin:5px;
    }
    input[type=text]{
        width:180px;
    }
    input[type=button]{
        width:80px;
        margin-left: 10px;
    }
    p{
        font-size: 13px;
        margin:20px;
    }  
} */ 
.black{
    position:relative;
    background-color:rgb(27, 25, 25);
    margin-top: 500px;
    width:100%;
    height:60%;
}
.contact{
     color:white;
     padding:50px;  
}
p{
    margin:20px;
}
i{
    font-size:30px;
    padding:0px 20px;
}
.flot{
    float: right;
}
@media (max-width:952px){
    .flot{
        float: left;
        margin:20px;
    }
    p{
        font-size: medium;
    }
    input[type=text]{
        width:350px;
        margin-left:230px;
    }
    input[type=message]{
        width:350px;
        margin-left: 230px;
    }
    input[type=button]{
        width:350px;
        margin-left: 230px;
    }
    .b{
        font-size: 300%;
    }
}
    </style>

        <script>
            function check()
            {
                name=document.form1.name.value;
                if(name.length == 0)
                {
                    alert("please enter your name")
                }
                email=document.form1.email.value;
                emailexp=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
                {
                    if(email.match(emailexp))
                    {}
                    else{
                        alert("Please enter your correct Email Id")
                    }
                }
            }
        </script>

</head>
<body>
    <!--navigation-->
    <nav>
        <div class="logo"><span style="color:rgb(19,18,18);">Surat</span> No#1</div>
        <ul>
            <li><a href="new.html">HOME</a></li>
            <li><a href="courses.html">COURSES</a>
            </li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="stud.html">STUDENTS CORNER</a></li>
            <li><a href="#">CONTACT US</a></li>
            <li><a href="ragister.html">RAGISTER</a></li>

        </ul>
    </nav>
<!--image-->    
<div class="a">
    <div class="b">
        <span>Contact Us</span>
    </div>
</div>
<!--form-->
<div class="center">
    <div class="d">
        
        <form name="form1" onsubmit="check()"> 
            <h2>Want us to contact you</h2>
            <input type="text" name="name" placeholder="Name"><br>
            <input type="text" name="email" placeholder="Email id"><br>
            <input type="message" name="Message" placeholder="Message"><br>
            <input type="button" value="Submit" onclick="check()">
        </form>
    </div>
</div>
<div class="black">
    <div class="contact">
        <h1>Contact Us</h1>
            <p><i class="fas fa-map-marker-alt"></i>60,ishwarkrupa society,section 3, 1st floor,opp Archana Vidhya Bhavan
                                                    ,Lumbe Hanuman Road, Surat-395006. </p>
            <p><i class="fab fa-whatsapp-square"></i>+91 8128166631</p>
            <p><i class="fas fa-phone-alt"></i>+91 8128166631</p>
            <p><i class="fas fa-envelope-open-text"></i>hirenunadkat99@gmail.com</p>
            
    <div class="flot">
        <i class="fab fa-facebook-square" style="color:rgb(17, 90, 226);"></i>
        <i class="fab fa-twitter" style="color:rgb(63, 125, 241);"></i>
        <i class="fab fa-instagram" style="color:rgb(236, 32, 32);"></i>
        <i class="fab fa-linkedin" style="color:rgb(201, 52, 201);"></i>
    </div>
    </div>

</div>

</body>
</html>