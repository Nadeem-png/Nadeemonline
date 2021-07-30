
@extends('master/layout')
@section('content')

<div class="container mt-5 py-5 container-sm">
<div class="row">
<div class="col-12 col-lg-6 col-md-6">
<h1 class="mt-5">Hi! Looking for someone to build a website for you?</h1>
<h5 class="mt-2 mb-3">Look no more! I am having 2-year experience in developing full stack Websites Desgin & Development WordPress websites with working on projects of different scales. Having customer satisfaction is my priority, 
I will work until my client is 100% satisfied.</h5>
<a href="" download>
<button class="btn btn-success px-3 py-2 ">Download Resume</button>
</a>

</div>
<div class="col-12 col-lg-6 col-md-6 ">
<center>
<img src="{{asset('image/nadeem.jpeg')}}" alt="nadeem khan" class="img-fluid rounded-circle mt-5 " width="150px" height="150px">
</center>

<h3 class="mt-4">Nadeem Khan</h3>
<h4 class="mt-2">Full Stack Web/ Developer</h4>
<h6 class="mt-3">Website Designer and Developer, focusing on new trends in the
 field of website development. I will create responsive, user-friendly
   website and fix
 issues related to HTML, CSS , Jquery , Javscript and Php/laravel.</h6>
<h6 class="mt-3">I am  student of Lahore Leads  University, Lahore, Pakistan. I do not follow old modules. I question every aspect of web design and see whether I can change it for better.
 I have a modern progressive approach to design websites.</h6>

 <h4 class="mt-5">Some Facts About Me:</h4>
 <p class="mt-4 mb-2"> <span>..</span>Technical education</p>
 <p class="mb-2"> <span>..</span>Creative and easy-going</p>
 <p class="mb-2"> <span>..</span>2+ years of experience</p>
 <p class="mb-2"> <span>..</span>Responsible</p>
 <p class="mb-2"> <span>..</span>100+ successfull projects</p>
 <p class="mb-2"> <span>..</span>Attentive to details</p>
</div>
</div>
</div>
<div class="container container-sm mt-5 text-center">
<h4>BENEFITS</h4>
<h2 class="mt-3">Why Work With Me</h2>
<div class="row">
<div class="col-12 col-lg-6 col-md-6">
<img src="" alt="" class="img-fluid mt-4">
<h5 class="mt-3 mb-2">Strategy</h5>
<p>I define your competition and target audience. 
Discover what is working in your online industry, then design your website.</p>
</div>
<div class="col-12 col-lg-6 col-md-6">
<img src="" alt="" class="img-fluid mt-4">
<h5 class="mt-3 mb-2">Creative</h5>
<p>Colour scheme, layout, sitemap, and style. I will bring your
 brand to life with a one of a kind masterpiece, built just for you.</p>
</div>
<div class="col-12 col-lg-6 col-md-6">
<img src="" alt="" class="img-fluid mt-4">
<h5 class="mt-3 mb-2">Design</h5>
<p>I question every aspect of web design and see whether I can change it for better.
 I have a modern progressive approach to design websites.</p>
</div>
<div class="col-12 col-lg-6 col-md-6">
<img src="" alt="" class="img-fluid mt-4">
<h5 class="mt-3 mb-2">Develope</h5>
<p>I turn your ideas into reality & my website is placed on a 
“development server” where you get to watch the whole process, live.</p>
</div>
</div>

</div>
<div class="container container-sm text-center mt-5">
<h4>PORTFOLIO</h4>
<h2 class="mt-3">Check Out My Works</h2>

<div class="row">
<div class="col-6 col-lg-4">
</div>
<div class="col-6 col-lg-4">
</div>
<div class="col-6 col-lg-4">
</div>
<div class="col-6 col-lg-4">
</div>
</div>
</div>

<div class="container container-sm mt-5 py-3">
<h1 class="text-center mt-5" style="color: rgb(55,207,162)">Contact-us</h1>
<div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="row">
      <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mt-2">
    <h1 class="mb-3" style="margin-top:30px">Get in touch</h1>
        <h6>Tell us about your projects, we are excited <br> to hear from you</h6>
      
<h4>Phone</h4>
<p style="color: rgb(55,207,162)">Whatsapp Number: 3017334787</p>
<p style="color: rgb(55,207,162)">Mobie Number: 03157334779</p>
<h4>Email Address</h4>
<a href="mailto:nk27890@gmail.com"style="color:rgb(55,207,162);text-decoration:none;">nk27890@gmail.com</a>
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