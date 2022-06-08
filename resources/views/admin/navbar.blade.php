<!-- partial:partials/_navbar.html -->
<div class="container-scroller">
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center"  style="background-color:white;">
          <a class="" href="{{url('/')}}">
          <img src="admin/images/admin_logo.png" alt="logo" style="width:400px;height:35px;" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="admin/images/admin_logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to AppointMed dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
             
            <x-app-layout>
            </x-app-layout>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
