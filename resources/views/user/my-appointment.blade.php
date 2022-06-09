<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>ApptMed</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
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
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary"><img alt="Qries" src="admin/images/admin_logo.png"
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about-us')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctor-page')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('news-page')}}">News</a>
            </li>

            @if(Route::has('login'))
            @auth 
            <li class="nav-item">
              <a class="nav-link" href="{{url('my-appointment')}}" style="background-color:gray;color:white;border-radius:5px;pointer-events:none;"><b>My Appointments</b></a>
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
    <div class="container"><h1 style="Font-size:45px;margin-top:50px;">MY APPOINTMENTS</h1></div>
    <div class="container" align="center" style="padding:40px;border-width:2px;margin-top:10px;border-style:solid;border-color:black;border-radius:10px;">
                <table class="display" id="appointment-table">
                @if(session()->has('message'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">X</button>
                      {{session()->get('message')}}
                  </div>
                @endif
                <thead>
                    <tr>
                        <th style="font-size: 20px;" >Doctor Name</th>
                        <th style="font-size: 20px;">Date</th>
                        <th style="font-size: 20px;">Message</th>
                        <th style="font-size: 20px;">Status</th>
                        <th style="font-size: 20px;">Cancel Appointment</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($appoint as $appoints)
                    <tr>
                        <td>{{$appoints->doctor}}</td>
                        <td>{{$appoints->date}}</td>
                        <td>{{$appoints->message}}</td>
                        <td><b><u>{{$appoints->status}}<u></b></td>
                        <td>
                          @if($appoints->status=="Approved")
                          <a class="btn btn-accent" style="pointer-events:none;color:white;background-color:#597884">Cancel</a>
                          @elseif ($appoints->status=="Completed")
                          <a class="btn btn-danger" href="{{url('cancel-appoint',$appoints->id)}}" 
                          onclick="return confirm('Are you sure you want to delete your appointment request with {{$appoints->doctor}} on {{$appoints->date}}')">
                          Delete</a>
                          @else
                          <a class="btn btn-danger" href="{{url('cancel-appoint',$appoints->id)}}" 
                          onclick="return confirm('Are you sure you want to delete your appointment request with {{$appoints->doctor}} on {{$appoints->date}}')">
                          Cancel</a>
                          @endif
                        </td>
                    </tr>                        
                @endforeach
                </tbody>         
                </table>
        </div>

        <script>
            $(document).ready( function () {
                 $('#appointment-table').DataTable();
            } );
        </script>
  
</body>
</html>