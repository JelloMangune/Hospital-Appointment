<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>ApptMed</title>

  @include('user.style')
</head>
<body>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span class="mai-mail text-primary"></span>medassistancebooking@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/Med-Assis-110405315002836"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/ApptMed"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.instagram.com/apptmed/"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary"><img alt="Qries" src="admin/images/admin_logo.png"
         width=150 height="40" style="padding-bottom:8px;padding-right:0px;"></a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
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

            @if(Route::has('login'))
            @auth 
            <li class="nav-item">
              <a class="nav-link" href="{{url('my-appointment')}}" style="background-color:#3498DB;color:white;border-radius:5px;"><b>My Appointments</b></a>
            </li>
            <x-app-layout>
            </x-app-layout>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login');}}" style="margin-bottom:5px;">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register');}}" style="margin-bottom:5px;">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

    <div align="center" style="padding:70px;">
        <table>
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
      @endif
            <tr style="background-color:black">
                <th style="padding:10px;font-size:20px;color:white;">Doctor Name</th>
                <th style="padding:10px;font-size:20px;color:white;">Date</th>
                <th style="padding:10px;font-size:20px;color:white;">Message</th>
                <th style="padding:10px;font-size:20px;color:white;">Status</th>
                <th style="padding:10px;font-size:20px;color:white;">Cancel Appointment</th>
            </tr>
            @foreach($appoint as $appoints)
            <tr style="background-color:black" align="center">
                <td style="padding:10px;color:white;">{{$appoints->doctor}}</td>
                <td style="padding:10px;color:white;">{{$appoints->date}}</td>
                <td style="padding:10px;color:white;">{{$appoints->message}}</td>
                <td style="padding:10px;color:white;">{{$appoints->status}}</td>
                <td><a class="bt btn-danger" href="{{url('cancel-appoint',$appoints->id)}}" 
                onclick="return confirm('Are you sure you want to delete your appointment request with {{$appoints->doctor}} on {{$appoints->date}}')">
                Cancel</a></td>
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