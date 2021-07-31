
@extends('master/layout')
@section('content')
<style>
.portfolio{
    background-color:#e6e9ed;
    height:auto;
}
.benifit{
    background-color:#e6e9ed;
    height:auto;
}
.btn{
   
color:white;

background: linear-gradient( 358.4deg,  rgba(249,151,119,1) -2.1%, rgba(98,58,162,1) 90% );
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
 
</style>
<div class="container mt-5 py-5 container-sm">
<div class="row">
<div class="col-12 col-lg-6 col-md-6">
<h1 class="mt-5">Hi! Looking for someone to build a website for you?</h1>
<h5 class="mt-2 mb-3">Look no more! I am having 2-year experience in developing full stack Websites Desgin & Development WordPress websites with working on projects of different scales. Having customer satisfaction is my priority, 
I will work until my client is 100% satisfied.</h5>
<a href="" download>
<button class="btn  px-3 py-2 ">Download Resume</button>
</a>

</div>
<div class="col-12 col-lg-6 col-md-6 ">
<center>
<img src="{{asset('image/nadeem.jpeg')}}" alt="nadeem khan" class="img-fluid rounded-circle mt-5 " width="150px" height="150px">
</center>

<h3 class="mt-4">Nadeem Khan</h3>
<h4 class="mt-2 color">Full Stack Web/ Developer</h4>
<h6 class="mt-3">Website Designer and Developer, focusing on new trends in the
 field of website development. I will create responsive, user-friendly
   website and fix
 issues related to HTML, CSS , Jquery , Javscript and Php/laravel.</h6>
<h6 class="mt-3">I am  student of Lahore Leads  University, Lahore, Pakistan. I do not follow old modules. I question every aspect of web design and see whether I can change it for better.
 I have a modern progressive approach to design websites.</h6>

 <h4 class="mt-5">Some Facts About Me:</h4>
 <h6 class="mt-4 mb-2"> <span class="color"> <i class="fas fa-ellipsis-h color fa-1x"></i></span> Technical education</h6>
 <h6 class="mb-2"> <span class="color"><i class="fas fa-ellipsis-h color fa-1x"></i></span> Creative and easy-going</h6>
 <h6 class="mb-2"> <span class="color" ><i class="fas fa-ellipsis-h color fa-1x"></i></span> 2+ years of experience</h6>
 <h6 class="mb-2"> <span class="color" ><i class="fas fa-ellipsis-h fa-1x"></i> </span> Responsible</h6>
 <h6 class="mb-2"> <span class="color" ><i class="fas fa-ellipsis-h color fa-1x"></i></span>  successfull projects</h6>
 <h6 class="mb-2"> <span class="color" > <i class="fas fa-ellipsis-h color fa-1x"></i> </span> Attentive to details</h6>
</div>
</div>
</div>
<div class="benifit">
<div class="container container-sm  text-center">
<h4 class="py-5 color">BENEFITS</h4>
<h2 class="">Why Work With Me</h2>
<div class="row">
<div class="col-12 col-lg-6 col-md-6">
<img src="{{asset('image/idea.png')}}" alt="" class="img-fluid w-50 color mt-4">
<h5 class="mt-3 mb-2">Strategy</h5>
<p>I define your competition and target audience. 
Discover what is working in your online industry, then design your website.</p>
</div>
<div class="col-12 col-lg-6 col-md-6">
<img src="{{asset('image/design-thinking.png')}}" alt="" class="img-fluid w-50 color mt-4">
<h5 class="mt-3 mb-2">Creative</h5>
<p>Colour scheme, layout, sitemap, and style. I will bring your
 brand to life with a one of a kind masterpiece, built just for you.</p>
</div>
<div class="col-12 col-lg-6 col-md-6">
<img src="{{asset('image/ui-design.png')}}" alt="" class="img-fluid w-50 color  mt-4">
<h5 class="mt-3 mb-2">Design</h5>
<p>I question every aspect of web design and see whether I can change it for better.
 I have a modern progressive approach to design websites.</p>
</div>
<div class="col-12 col-lg-6 col-md-6 mb-4">
<img src="{{asset('image/web-development.png')}}" alt="" class="img-fluid w-50 color mt-4">
<h5 class="mt-3 mb-2">Develope</h5>
<p>I turn your ideas into reality & my website is placed on a 
“development server” where you get to watch the whole process, live.</p>
</div>
</div>

</div>
</div>

<div class="container container-sm text-center mt-5">
<h4 class="color">PORTFOLIO</h4>
<h2 class="mt-3 mb-5">Check Out My Works</h2>

<div class="row">
<div class="col-6 col-lg   mb-3 ">
<div class="portfolio p-2">
<a href=""> <img src="{{asset('image/a1.PNG')}}" alt="" class="img-fluid img-thumbline"></a>
</div>
</div>
<div class="col-6 col-lg  mb-3">
<div class="portfolio p-2">
<a href=""> <img src="{{asset('image/a1.PNG')}}" alt="" class="img-fluid img-thumbline"></a>
</div>
</div>
<div class="col-6 col-lg  mb-3">
<div class="portfolio p-2">
<a href=""> <img src="{{asset('image/a1.PNG')}}" alt="" class="img-fluid img-thumbline"></a>
</div>
</div>
<div class="col-6 col-lg mb-3">
<div class="portfolio p-2">
<a href=""> <img src="{{asset('image/a1.PNG')}}" alt="" class="img-fluid img-thumbline"></a>
</div>
</div>
</div>
<div class="mt-5 py-5 text-center">
<h6>I aim to provide the right web design for your business
 as customer satisfaction is my priority. I am focusing on 
 new trends in the field of web development. I do not follow old 
 modules. I question every aspect of web design and see whether
  I can change it for the better.
 I have a modern progressive approach to design websites.</h6>

 <a href="" class="btn  py-3 px-5 mt-4">Start a Project with me!</a>
</div>

</div>

<div class="container container-sm mt-5 py-3">
<h4 class="text-center mt-5 color">Contact</h4>
<h2 class="text-center mt-3" >Let’s Have A Chat!</h2>
<h6 class="text-center mt-5" >Interested? Let’s Get in touch and start working on your website now!</h6>
<div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="row">
      <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mt-5">
    <div class="row mb-5">
    <div class="col-2">
<a href="" class="">
            <i class="fas fa-map-marked-alt color" style="font-size: 40px" ></i>
        </a>
    </div>
    <div class="col-10">
    <h4 class="mr-5">Lahore, Pakistan</h4>
    </div>
    </div>
    <div class="row  mb-5">
    <div class="col-2">
<a href="" class="">
            <i class="fas fa-mobile-alt color" style="font-size: 40px"></i>
        </a>
    </div>
    <div class="col-10">
    <h4 class="mr-5">03017334787</h4>
    </div>
    </div>
    <div class="row  mb-5">
    <div class="col-2">
<a href="" class="">
            <i class="fas fa-envelope color"  style="font-size:40px" ></i>
        </a>
    </div>
    <div class="col-10">
    <h4 class="mr-5"><a href="mailto:nk27890@gmail.com"style="color:black;text-decoration:none;">nk27890@gmail.com</a></h4>
    </div>
    </div>
<div class="row mb-5">
    <div class="col-2">
<a href="" class="">
            <i class="fab fa-whatsapp-square color" style="font-size:40px"></i>
        </a>
    </div>
    <div class="col-10">
    <h4 class="mr-5">Whatsapp</h4>
    </div>
    </div>
      </div>
   
     <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 div3">
        <form action="" class="container mb-5 mt-4">
            <label class="font-weight-bold text-dark">Full Name:</label>
            <input type="text" placeholder="Full Name..." class="form-control">

            <label class="text-dark font-weight-bold mt-2">Email:</label>
            <input type="email" placeholder="Email..." class="form-control">

            <label class="font-weight-bold text-dark mt-2">Your Message:</label>
            <textarea type="text" placeholder="Your Message" class="form-control" rows="5" style="resize: none"></textarea>

            <a href="" class="btn  mt-3 py-2 px-4 text-white  " style=" background-color:rgb(55,207,162);">Send Massege</a>
        </form>


</div>
    </div>

</div>
</div>
@endsection
@section('title','Home')
@section('navb','active')
