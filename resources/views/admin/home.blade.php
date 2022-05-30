<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.style')
  </head>
  <body>
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      @include('admin.sidebar')
      @include('admin.body') 

    </div>
    <!-- container-scroller -->
      @include('admin.jscript')
  </body>
</html>