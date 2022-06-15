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
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#doctors">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            @if (Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow ; color:black "  href="">My Appointment</a>
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

  <div class="container" style="margin-top:20px">

    <a style="margin-left: 700px" class="btn btn-primary" href="{{url('exportpdf')}}">Export as Pdf</a>


  </div>

  <div align='center' style="padding: 50px" >

    <table >

        <tr style="background-color: black; color:white ">
            <th style="padding: 10px ; font-size :20px">Doctor Name</th>
            <th style="padding: 10px ; font-size :20px">Date</th>
            <th style="padding: 10px ; font-size :20px">Message</th>
            <th style="padding: 10px ; font-size :20px">Status</th>

            <th style="padding: 10px ; font-size :20px">Action</th>
        </tr>
      
        @foreach ($appoinment as $item)
        <tr>

          

            <td>{{$item->doctor}}</td>

            <td>{{$item['date']}}</td>

            <td>{{$item['message']}}</td>

            <td>{{$item['status']}}</td>

            <td><a onclick="return confirm('Are you Sure to Delete This?')" class="btn btn-danger" style="" href="{{url('Cancelappoinment/'.$item['id'])}}">Cancel</a></td>
            
           


        </tr>

        @endforeach
    </table>
  </div>

  
 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
