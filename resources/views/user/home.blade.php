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

    <div style="margin-right: 250px">

  <header>
    
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="">Smart</span>-Health Consulting</a>

       

        <ul class="navbar-nav ml-auto">
          <li class="  " style="">
            <form class="" method="GET" action="{{url('searchforuser/')}}">
              <input type="text"  class=" text-black " name="search" placeholder="Search Doctor/Specialist" required>
    
              <button style="background-color: green;margin-left: 2px; padding:11px" class="btn btn-primary" type="submit">Search</button>
            </form>
            
          </li>
        </ul>


        
       

        
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="#doctors">Doctors</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="{{url('contactview')}}">Complain
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" style="background-color: green ;margin-right:10px; color:black " 
               href="{{url('userappoinmentview')}}">Take Appoinment</a>
            </li>

            

            @auth

          

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

                
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

</div>

  
  @if ( session()->has ('message') )

  <button type=" button" class="close btn btn-success" style="background-color: green" data-dismiss="alert"> x </button>
  
  {{session()->get('message')}}

  @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="{{url('login')}}" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">This system aims at maintaining patient health records and even getting appointments from various doctors for related treatments. The system user must register as a member of this system and keep updating his medical history. Patients can then select from a list of specialized doctors for respective treatments such as (skin specialist, ENT specialist cardiologist etc) at particular locations. Patients may also select suitable appointment timings for their meeting.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

     @include('user.doctor')

     @include('user.latest')

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
