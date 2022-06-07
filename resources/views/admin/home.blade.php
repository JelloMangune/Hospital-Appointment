<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.style')
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Organization Type');
      data.addColumn('number','Size');
      data.addRows([
        @foreach($data as $item)
        ["{{ $item->doctor }}", {{$item->doctor_size}}],
        @endforeach
      ]);

      var options = {
        title: 'Number of Appointments',
        is3D: true,
        chartArea:{left:120,top:120,bottom:20,right:20},
        titleTextStyle:{align:'center'},
      };

      var chart = new google.visualization.PieChart(document.getElementById('doctor_appointments'));
      chart.draw(data, options);
    }
  </script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Organization Type');
        data.addColumn('number','Size');
        data.addRows([
          @foreach($data_doctor as $items)
          ["{{ $items->specialization }}", {{$items->specialization_size}}],
          @endforeach
        ]);

        var options = {
          title: 'Doctor Specialization',
          is3D: true,
          chartArea:{left:120,top:120,bottom:20,right:20},
          titleTextStyle:{align:'center'},
        };

        var chart = new google.visualization.PieChart(document.getElementById('doctor_specialization'));
        chart.draw(data, options);
      }
  </script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Organization Type');
          data.addColumn('number','Size');
          data.addRows([
            @foreach($data_status as $items)
            ["{{ $items->status }}", {{$items->status_size}}],
            @endforeach
          ]);

          var options = {
            title: 'Appointment Status',
            is3D: true,
            chartArea:{left:120,top:120,bottom:20,right:20},
            titleTextStyle:{align:'center'},
          };

          var chart = new google.visualization.PieChart(document.getElementById('status'));
          chart.draw(data, options);
        }
  </script>
</head>
  <body>
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
    @include('admin.sidebar')
    <div class="main-panel" style="background-color:white;">
      <div class="container" align="center"><h1 style="Font-size:30px;margin-top:20px;">HOSPITAL DATA CHARTS</h1></div>
      <div class="content-wrapper" align="center" style="background-color:white;">
      <div id="status" style="width:850px;height:500px;border-width:2px;border-style:solid;border-color:black;border-radius:10px;"></div>
      </div>
      <div class="content-wrapper" align="center" style="background-color:white;">
      <div id="doctor_appointments" style="margin-top:5px;width:850px;height:500px;border-width:2px;border-style:solid;border-color:black;border-radius:10px;"></div>
      </div>
      <div class="content-wrapper" align="center" style="background-color:white;">
      <div id="doctor_specialization" style="margin-top:5px;width:850px;height:500px;border-width:2px;border-style:solid;border-color:black;border-radius:10px;"></div>
      </div>
    </div>
    <!-- container-scroller -->
      @include('admin.jscript')
  </body>
</html>