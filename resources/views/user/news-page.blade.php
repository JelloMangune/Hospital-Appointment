<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
  @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
      @endif
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

    <!-- <div class="alert alert-danger" style="text-align:center">
            <button type="button" class="close" data-dismiss="alert">X</button>
            This page is only dedicated for academic purposes. The appointments and the doctors are not real.
        </div> -->
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
            <li class="nav-item active">
              <a class="nav-link" href="{{url('news-page')}}">News</a>
            </li>
            @if(Route::has('login'))
            @auth 
            <li class="nav-item">
              <a class="nav-link" href="{{url('my-appointment')}}" style="background-color:#3498DB;color:white;border-radius:5px;"><b>My Appointments</b></a>
            </li>
            <x-app-layout>
            </x-app-layout>
            @include('user.style')
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
  </header>>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">
            <div class="col-sm-6 col-lg-4 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a>Covid19</a>
                  </div>
                  <a class="post-thumb">
                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">List of Countries without Coronavirus case</h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <span>Roger Adams</span>
                    </div>
                    <span class="mai-time"></span> 1 week ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a>Dental</a>
                  </div>
                  <a class="post-thumb">
                    <img src="../assets/img/blog/blog_3.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">What is the impact of eating too much sugar?</h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/person_3.jpg" alt="">
                      </div>
                      <span>Diego Simmons</span>
                    </div>
                    <span class="mai-time"></span> 2 weeks ago
                  </div>
                </div>
              </div>
            </div>

            
            
            <div class="col-sm-6 col-lg-4 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a>Patient Services</a>
                  </div>
                  <a class="post-thumb">
                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">The Recovery Room: News in the pandemic</h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/person_2.jpg" alt="">
                      </div>
                      <span>John Doe</span>
                    </div>
                    <span class="mai-time"></span> 1 month ago
                  </div>
                </div>
              </div>
            </div>   
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>