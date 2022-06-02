<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar"style="background-color:#A1DCF6;">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="admin/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name" style="color:black;"><b>John Doe</b></p>
                  <p class="designation" style="color:black;">Admin</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link"><span style="color:#007BFF;">Doctors</span></span>
            </li>
            <li class="nav-item" style="color:black;">
              <a class="nav-link" href="{{url('add_doctor_view');}}">
                <span class="menu-title" style="color:black;"><b>Add Doctor</b></span>
                <i class="icon-doc  menu-icon" style="color:black;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('show-doctor')}}">
                <span class="menu-title" style="color:black;"><b>All Doctors</b></span>
                <i class="icon-layers menu-icon" style="color:black;"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link"><span style="color:#007BFF;">Appointments</span></span></li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('show-appointment')}}">
                <span class="menu-title" style="color:black;"><b>Appointment list</b></span>
                <i class="icon-book-open menu-icon" style="color:black;"></i>
              </a>
            </li>
          </ul>
        </nav>
