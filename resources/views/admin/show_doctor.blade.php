<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      @include('admin.sidebar')
      <div class="main-panel">
      <div align="center" style="padding:20px;color:white;">
          <table>
              <tr style="background-color:black;">
                <th style="padding:10px">Doctor Name</th>
                <th style="padding:10px">Email</th>
                <th style="padding:10px">Phone Number</th>
                <th style="padding:10px">Address</th>
                <th style="padding:10px">Specialization</th>
                <th style="padding:10px">Room Number</th>
                <th style="padding:10px">Image</th>
                <th style="padding:10px">Update</th>
                <th style="padding:10px">Delete</th>
              </tr>
              @foreach($data as $doctor)
              <tr align="center" style="background-color:skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->email}}</td>
                <td>{{$doctor->number}}</td>
                <td>{{$doctor->address}}</td>
                <td>{{$doctor->specialization}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height=100 width=100 src="doctor_images/{{$doctor->image}}"></td>
                <td>
                    <a class="btn btn-success" href="{{url('update-doctor',$doctor->id)}}">Update</a>
                </td>
                <<td>
                    <a class="btn btn-danger" href="{{url('delete-doctor', $doctor->id)}}" 
                    onclick="return confirm('Are you sure you want to delete Doctor {{$doctor->name}}&#8217;s data?')">Delete</a>
                </td>
              </tr>
              @endforeach
          </table>
      </div>


    </div>
    <!-- container-scroller -->
      @include('admin.jscript')
  </body>
</html>