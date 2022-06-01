<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.style')
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      @include('admin.sidebar')
      <div class="main-panel">
      <div class="container"><h1 style="Font-size:30px;margin-top:20px;">ALL DOCTORS</h1></div>
      <div class="container" align="center" style="padding:20px;border-width:2px;margin-top:10px;border-style:solid;border-color:black;border-radius:10px;">
          <table class="display" id="pets-table">
            <thead>
              <tr>
                <th>Doctor Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Specialization</th>
                <th>Room Number</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            @foreach($data as $doctor)
            <tbody>
              <tr>
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
                <td>
                    <a class="btn btn-danger" href="{{url('delete-doctor', $doctor->id)}}" 
                    onclick="return confirm('Are you sure you want to delete Doctor {{$doctor->name}}&#8217;s data?')">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
    <script>
            $(document).ready( function () {
                 $('#pets-table').DataTable();
            } );
        </script>
  </body>
</html>