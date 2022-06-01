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
      <div class="container"><h1 style="Font-size:30px;margin-top:20px;">APPPOINTMENT LIST</h1></div>
      <div class="container" align="center" style="padding:40px;border-width:2px;margin-top:10px;border-style:solid;border-color:black;border-radius:10px;">
                <table class="display" id="pets-table">
                <thead>
                    <tr>
                      <th style="font-size:13px;">Customer Name</th>
                      <th style="font-size:13px;">Email</th>
                      <th style="font-size:13px;">Phone</th>
                      <th style="font-size:13px;">Doctor</th>
                      <th style="font-size:13px;">Date</th>
                      <th style="font-size:13px;">Message</th>
                      <th style="font-size:13px;">Status</th>
                      <th style="font-size:13px;">Approve</th>
                      <th style="font-size:13px;">Cancel</th>
                      <th style="font-size:13px;">Send Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $appoint)
                    <tr>
                      <td style="font-size:13px;">{{$appoint->name}}</td>
                      <td style="font-size:13px;">{{$appoint->email}}</td>
                      <td style="font-size:13px;">{{$appoint->number}}</td>
                      <td style="font-size:13px;">{{$appoint->doctor}}</td>
                      <td style="font-size:13px;">{{$appoint->date}}</td>
                      <td style="font-size:13px;">{{$appoint->message}}</td>
                      <td style="font-size:13px;"><b><u>{{$appoint->status}}</b></u></td>
                      @if ($appoint->status=="Approved")
                      <td style="font-size:13px;">
                          <a class="btn btn-secondary" href="{{url('approve',$appoint->id)}}" style="pointer-events:none;">Approve</a>
                      </td>
                      @else
                      <td style="font-size:13px;">
                          <a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approve</a>
                      </td>
                      @endif
                      @if ($appoint->status=="Canceled")
                      <td>
                          <a class="btn btn-secondary" href="{{url('cancel',$appoint->id)}}"style="pointer-events:none;">Cancel</a>
                      </td>
                      @else
                      <td>
                          <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a>
                      </td>
                      @endif
                      <td>
                          <a class="btn btn-primary" href="{{url('email-display',$appoint->id)}}">Send Email</a>
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