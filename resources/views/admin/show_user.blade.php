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
      <div class="container"><h1 style="Font-size:30px;margin-top:20px;border-style:solid;border-width:3px;border-color:#294552;text-align:center;">ALL USERS</h1></div>
      <div class="container" align="center" style="padding:10px;margin-top:40px;">
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
                <input type="hidden" id="custId" name="custId" value="{{$count=0}}"> 
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                @foreach($data2 as $appointment)
                    @if($user->id == $appointment->user_id)
                    <input type="hidden" id="custId" name="custId" value="{{$count+=1}}">         
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