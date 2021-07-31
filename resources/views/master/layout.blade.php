<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name = "keywords" content = "king borad & granite, kitchen work,services, construction, granite work, tiles ,tar roads,bed room tiles, cupboard," />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">

 <style>
*{
                font-family: 'STIX Two Math', serif;
            }
.color{
background-image: linear-gradient( 358.4deg,  rgba(249,151,119,1) -2.1%, rgba(98,58,162,1) 90% );
/* Set the background size and repeat properties. */
  background-size: 100%;
  background-repeat: repeat;

  /* Use the text as a mask for the background. */
  /* This will show the gradient as a text color rather than element bg. */
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; 
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;

}
        .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
             .navbar-nav{
            
            z-index:1000;
            background-color:#2f3640;
            }
           .navbar-collapse{
            
            z-index:1000;
        
            }
.back-to-top {
 position: fixed;
 bottom: 30px;
 Left: 12px;
 width: 55px;
 height: 55px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
 background-image: url(top.png);
}

.back-to-top:hover{
 opacity: 0.7;
}
.whatsapp{
 position: fixed;
 bottom: 30px;
 right: 12px;
 width: 55px;
 height: 55px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
}
.footer{
    background-color:#e6e9ed;
    height:auto;
    
}

            
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
 //Check to see if the window is top if not then display button
 $(window).scroll(function(){
  // Show button after 100px
  var showAfter = 100;
  if ($(this).scrollTop() > showAfter ) { 
   $('.back-to-top').fadeIn();
  } else { 
   $('.back-to-top').fadeOut();
  }
 });
 
 //Click event to scroll to top
 $('.back-to-top').click(function(){
  $('html, body').animate({scrollTop : 0},800);
  return false;
 });
 
});
</script>
</head>
<body style="">
<nav class="navbar nav1 fixed-top   navbar-expand-lg"style=" padding:8px 8px;background-color:#2f3640 ">
<div class="w-25">
        <!-- <a href="/" class="navbar-brand">
            <img src="{{asset('image/logo.png')}}" class="img-fluid " style="margin-left:50px;width:60px; height:60px">
        </a> -->
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars color"></i></button>
  
    <div class="navbar-collapse  collapse" id="mynav">
        <ul class="navbar-nav mt-3">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1  ml-5 font-weight-bold">Home</a>
                </li>
            <li class="nav-item" @yield('navb')>
                <a href="/service" class="nav-link a1 ml-5 font-weight-bold">Services</a>
            </li>

            <li class="nav-item" @yield('navc')>
                <a href="/about" class="nav-link a1 ml-5 font-weight-bold">About</a>
            </li>

            <li class="nav-item" @yield('navd')>
                <a href="/contact" class="nav-link a1 ml-5 font-weight-bold">Contact</a>
            </li>

            <li class="nav-item" @yield('nave')>
                <a href="/gallery" class="nav-link a1 ml-5 font-weight-bold">Gallery</a>
            </li>
            <li class="nav-item" @yield('nave')>
                <a href="/whatsapp" class="nav-link a1 ml-5 font-weight-bold">Whatsapp</a>
            </li>


        </ul>
    </div>
</nav>

@yield('content')

<!-- Back to top -->
<a href="#" class="back-to-top" ><i class="fas fa-chevron-up fa-1x text-center p-2 text-white" style="background-color:rgba(63, 66, 71,0.5);" ></i></a>
<a href="/whatsapp" class="whatsapp" ><i class="fab fa-whatsapp-square color rounded-circle fa-3x"></i></a>

<footer class="footer">
<div class="container mt-5 py-5">
<div class="text-center ">
<img src="{{asset('image/nadeem.jpeg')}}" alt="nadeem" class="img-fluid rounded-circle" height="120px" width="120px">
<h3 class="mt-5 mb-3">Nadeem khan</h3>
<h4 class="mb-4 color">Full Stack Web/Developer</h4>

  
<a href="https://www.linkedin.com/in/nadeem-khan-3b1924207" class="ml-4 ">
            <i class="fab fa-linkedin-in color " style="font-size: 25px"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100012136065724" class="ml-4 ">
            <i class="fab fa-facebook-f color" style="font-size: 25px"></i>
        </a>
        
        <a href="https://www.instagram.com/invites/contact/?i=ntoc7orpkvy9&utm_content=1if40bc" class="ml-4 ">
            <i class="fab fa-instagram color" style="font-size: 25px"></i>
        </a>
<a href="https://github.com/Nadeem-png" class="ml-4 ">
            <i class="fab fa-github color" style="font-size: 25px"></i>
        </a>
        <h6 class="mt-5">&copy; 2020-<?php echo date("Y") ?> Nadeem khan - Web Developer. All Rights Reserved.</h6>
</div>
</div>
</footer>

<script>
  AOS.init();
</script>
</body>
</html>
