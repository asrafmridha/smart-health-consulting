<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Smart Health - Medical Center</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="">Smart</span>-Health Consulting</a>

        <ul class="navbar-nav ml-auto">
          <li class="  " style="">
            <form class="" method="GET" action="{{url('searchforuser/')}}">
              <input type="text"  class=" text-black " name="search" placeholder="Search Doctor" required>
    
              <button style="background-color: green;margin-left: 2px; padding:11px" class="btn btn-primary" type="submit">Search</button>
            </form>
            
          </li>
        </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            @if (Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link " style="background-color: greenyellow ;margin-right:10px; color:black " 
               href="{{url('userappoinmentview')}}">Take Appoinment</a>
            </li>


           

            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow ; color:black " 
               href="{{url('myappoinment')}}">My Appointment</a>
            </li>

            
                <x-app-layout>

                </x-app-layout>

                @else
   
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('login')}}">Login</a>

              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="register">Register</a>
              </li>
            </li>

                   @endauth

                   @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if ( session()->has ('message') )

 
  <div align='center' class="text-white" style="background-color: green; padding:20px;font-size: 30px;position: relative ">
    {{session()->get('message')}}

  </div>
 

  @endif


  <div style="bottom: 200px">
  <form class="main-form" method="POST" action="{{url('appoinment')}}">

    @csrf

    <div class="row mt-5 ">
      <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
        <input type="text" name="name" class="form-control" placeholder="Full name" required>
      </div>
      <div class="col-12 col-sm-6 py-2 wow fadeInRight">
        <input type="text" name="email" class="form-control" placeholder="Email address.." required>
      </div>
      <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
        <input type="date" name="date" class="form-control" required>
      </div>
      <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
        <select name="doctor" id="departement" class="custom-select" >
          <option value="">--Select Doctor--</option>
           @foreach ($data as $doctor) 
         
          <option value="{{$doctor->name}}">{{$doctor->name}}</option>
          @endforeach  
         
          
      </div>
      <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
        <input type="text" name="phone" class="form-control" placeholder="Number.." required>
      </div>
      <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
      </div>
    </div>

   
    <button type="submit" onclick="Are You Sure This date are Comfortable for you?" style="background-color: green; color:white; font:italic; padding:12px" >Submit Request</button>
        
  
          
  </form>
</div>
</div> 

</div>

  
  



<!-- .bg-light -->

     {{-- @include('user.doctor') --}}

     {{-- @include('user.latest') --}}

   <!-- .page-section -->


 {{-- user appoinment --}}

  <!-- .page-section -->

   <!-- .banner-home -->

 @include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
