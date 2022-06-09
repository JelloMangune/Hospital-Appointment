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
      <div class="container"><h1 style="Font-size:30px;margin-top:20px;">ALL USERS</h1></div>
      <div class="container" align="center" style="padding:20px;border-width:2px;margin-top:10px;border-style:solid;border-color:black;border-radius:10px;">
          <table class="display" id="pets-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Number of appointments</th>
              </tr>
            </thead>

            <tbody>
            @foreach($data as $user)
            @if ($user->usertype == 0)
              <tr>
                {{$count=0}}
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                @foreach($data2 as $appointment)
                    @if($user->id == $appointment->user_id)
                        {{$count+=1}}                   
                    @endif
                @endforeach
                <td>{{$count}}</td>
            </tbody>
            @endif
            @endforeach
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