@extends('layouts.app')
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Assets', 'Quantity'],
          <?php echo $data?>
        ]);

        var options = {
          title: 'Categories'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
@section('content')
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <div id="piechart" style="width: 900px; height: 500px;"></div>
  </div>
  @stop
  <!-- /.content-wrapper -->
  