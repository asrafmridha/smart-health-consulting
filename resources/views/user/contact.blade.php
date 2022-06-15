<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

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
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Smart</span>-Health</a>

      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
               


            

         <!-- .navbar-collapse -->
      </div> <!-- .container -->


                     
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="/#doctors">Doctors</a>
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
        </div>
      
      







    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
       
        <h1 class="font-weight-normal">Complain</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1> <br>

      @if ( session()->has ('message') )

 
  <div align='center' class="text-white" style="background-color: green; padding:20px;font-size: 30px;position: relative ">
    {{session()->get('message')}}

  </div>
 

  @endif



    

      <form class="contact-form mt-5" method="POST" enctype="multipart/form-data" action="{{url('contact')}}">

        @csrf

            <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" required name="name" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="email" id="emailAddress" class="form-control"  required name="email" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" required name="subject" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control" required rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary ">Send Message</button>
      </form>
    </div>
  </div>

  
   <!-- .banner-home -->

  
  @include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>