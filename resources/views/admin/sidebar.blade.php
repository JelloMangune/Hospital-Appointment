<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar"style="background-color:#121A24;">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="{{url('/')}}" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="admin/images/faces/admin-profile.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><b>Administrator</b></p>
                  <p class="designation">Active</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link"><span style="color:#007BFF;">Doctors</span></span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('add_doctor_view');}}">
                <span class="menu-title"><b>Add Doctor</b></span>
                <i class="icon-doc  menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('show-doctor')}}">
                <span class="menu-title"><b>All Doctors</b></span>
                <i class="icon-layers menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link"><span style="color:#007BFF;">Appointments</span></span></li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('show-appointment')}}">
                <span class="menu-title"><b>Appointment list</b></span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link"><span style="color:#007BFF;">Users</span></span></li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('show-user')}}">
                <span class="menu-title"><b>View Users</b></span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
