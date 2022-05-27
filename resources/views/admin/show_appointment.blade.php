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
      
      <div align="center" style="padding:30px;color:white;">
          <table>
              <tr style="background-color:black;">
                <th style="padding:10px">Customer Name</th>
                <th style="padding:10px">Email</th>
                <th style="padding:10px">Phone</th>
                <th style="padding:10px">Doctor</th>
                <th style="padding:10px">Date</th>
                <th style="padding:10px">Message</th>
                <th style="padding:10px">Status</th>
                <th style="padding:10px">Approve</th>
                <th style="padding:10px">Cancel</th>
              </tr>
              @foreach($data as $appoint)
              <tr align="center" style="background-color:skyblue;">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->number}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approve</a>
                </td>
                <<td>
                    <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a>
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