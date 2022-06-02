<!-- partial:partials/_navbar.html -->
<div class="container-scroller">
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center"  style="background-color:#A1DCF6;">
          <a class="navbar-brand brand-logo" href="{{url('/')}}">
          <img src="admin/images/admin_logo.png" alt="logo" style="margin-left:20px;width:1000px;height:35px;"class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="admin/images/admin_logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to AppointMed dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
             
            <x-app-layout>
            </x-app-layout>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
