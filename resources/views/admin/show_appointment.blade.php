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
      <div class="container" align="center" style="padding:20px;border-width:2px;margin-top:5px;border-style:solid;border-color:black;border-radius:10px;">
                <table class="display" id="pets-table">
                <thead>
                    <tr>
                      <th style="font-size:11px;">Customer Name</th>
                      <th style="font-size:11px;">Email</th>
                      <th style="font-size:11px;">Phone</th>
                      <th style="font-size:11px;">Doctor</th>
                      <th style="font-size:11px;">Date</th>
                      <th style="font-size:11px;">Message</th>
                      <th style="font-size:11px;">Status</th>
                      <th style="font-size:11px;">Approve</th>
                      <th style="font-size:11px;">Cancel</th>
                      <th style="font-size:11px;">Send Email</th>
                      <th style="font-size:11px;">Completed</th>
                      <th style="font-size:11px;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $appoint)
                    <tr>
                      <td style="font-size:11px;">{{$appoint->name}}</td>
                      <td style="font-size:11px;">{{$appoint->email}}</td>
                      <td style="font-size:11px;">{{$appoint->number}}</td>
                      <td style="font-size:11px;">{{$appoint->doctor}}</td>
                      <td style="font-size:11px;">{{$appoint->date}}</td>
                      <td style="font-size:11px;">{{$appoint->message}}</td>
                      <td style="font-size:11px;"><b><u>{{$appoint->status}}</b></u></td>
                      @if ($appoint->status=="Completed")
                          <td style="font-size:11px;">
                            <a class="btn btn-secondary btn-sm" href="{{url('approve',$appoint->id)}}" style="pointer-events:none;font-size:13px;">Approve</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{url('cancel',$appoint->id)}}"style="pointer-events:none;font-size:13px;">Cancel</a>
                        </td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{url('email-display',$appoint->id)}}" style="font-size:13px;">Send Email</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{url('finish',$appoint->id)}}"style="pointer-events:none;font-size:13px;" onclick="return confirm('Are you sure you want to complete this appointment of {{$appoint->name}}?')">Completed</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="{{url('delete',$appoint->id)}}" onclick="return confirm('Are you sure you want to delete this appointment of {{$appoint->name}}?')" style="font-size:13px;">Delete</a>
                        </td>
                      @else
                        @if ($appoint->status=="Approved")
                        <td style="font-size:11px;">
                            <a class="btn btn-secondary btn-sm" href="{{url('approve',$appoint->id)}}" style="pointer-events:none;font-size:13px;">Approve</a>
                        </td>
                        @else
                        <td style="font-size:11px;">
                            <a class="btn btn-success btn-sm" href="{{url('approve',$appoint->id)}}" style="font-size:13px;">Approve</a>
                        </td>
                        @endif
                        @if ($appoint->status=="Canceled")
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{url('cancel',$appoint->id)}}"style="pointer-events:none;font-size:13px;">Cancel</a>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-danger btn-sm" href="{{url('cancel',$appoint->id)}}" style="font-size:13px;">Cancel</a>
                        </td>
                        @endif
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{url('email-display',$appoint->id)}}" style="font-size:13px;">Send Email</a>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{url('finish',$appoint->id)}}" onclick="return confirm('Are you sure you want to complete this appointment of {{$appoint->name}}?')" style="font-size:13px;">Completed</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="{{url('delete',$appoint->id)}}" onclick="return confirm('Are you sure you want to delete this appointment of {{$appoint->name}}?')" style="font-size:13px;">Delete</a>
                        </td>
                      @endif
                      
                      
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