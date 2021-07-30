
@extends('master/layout')
@section('content')

<div class="contact bg-light" style="background-color:#ccc; font-family:sans-serif;">
<div class="container py-5">
<h1 class="text-center mt-5" style="color: rgb(55,207,162)">Contact-us</h1>
<div class="row">
<div class="col-12 col-lg-7 col-md-6 mt-5">
<div data-aos="fade-up"
     data-aos-duration="3000">
<div class="card p-5">
<h4  style="color: rgb(55,207,162)">GET IN TOUCH</h4>
<form>
<div class="form-group mt-3">
                            <label style="font-weight: bold;" class="mb-2">Name</label>
                            <input type="text" placeholder="Enter name.." class="form-control @error('fname')is-invalid @enderror" name="fname" value="{{old('fname')}}">
                        </div>
                    
                        <div class="form-group mt-3">
                            <label style="font-weight: bold;" class="mb-2">Email</label>
                            <input type="text" placeholder="Enter Email Address" class="form-control @error('email')is-invalid @enderror" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group mt-3">
                            <label style="font-weight: bold;" class="mb-2">Comment or Message </label>
                            <textarea class="form-control  @error('remarks')is-invalid @enderror" placeholder="Type Message..." style="resize: none;" rows="5" name="remarks" >{{old('remarks')}}</textarea>
                        </div>
                        <button class="btn border border-white text-white px-4 mt-4 ml-4">Submit</button>
                        @csrf


</form>
</div>
</div>
</div>
<div class="col-12 col-lg-5 col-md-6 mt-5">
<div data-aos="fade-up"
     data-aos-duration="3000">
<div class="card p-4">
<div class="card-text">
<h4>Address</h4>
<p>Location:  shed 3, 13 Hawthorne street kokstad south Africa</p>
<h4>Phone</h4>
<p style="color: rgb(55,207,162)">Whatsapp number: 0645228255</p>
<p style="color: rgb(55,207,162)">Office number 039 797 0701</p>
<h4>Email Address</h4>
<a href="mailto:ahmedshofisa@gmail.com"style="color:rgb(55,207,162);text-decoration:none;">ahmedshofisa@gmail.com</a>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('title','Home')
@section('navb','active')