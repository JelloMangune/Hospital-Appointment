<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      @include('admin.sidebar')
      <div class="main-panel">
      <div class="container" align="center"><h1 style="Font-size:30px;margin-top:20px;">SEND EMAIL</h1></div>
      <div class="container" align="center" style="padding:20px;width:500px;border-width:2px;margin-top:10px;border-style:solid;border-color:black;border-radius:10px;">
      
      @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
      @endif
        <form action="{{url('send-email',$data->id);}}" method="POST">
            @csrf
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Greeting</label>
                <input type="text" name="greeting" placeholder="" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Body</label>
                <textarea name="body" placeholder="" style="height:300px;" required></textarea>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Attached Text</label>
                <input type="text" name="attachedtext" placeholder="" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Attached URL</label>
                <input type="text" name="attachedurl" placeholder="" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Closing</label>
                <input type="text" name="closing" placeholder="" required>
            </div>
            <div style="padding:15px; color:black;">
                <input type="submit" class="btn btn-primary" style="background-color:#007BFF;">
            </div>
        </form>    
      </div>
    </div>
    <!-- container-scroller -->
      @include('admin.jscript')
  </body>
</html>