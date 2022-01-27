@extends('layouts.app')
@section('content')
<section class="content-wrapper">
<!doctype html>
<html lang="en">
  <head>
    <title>Google Bar Chart Integration in Laravel 8 Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
</head>
  <body>
    <h2 style="text-align: center;">Status of assets</h2>
    <div class="container-fluid p-5">
    <div id="barchart_material" style="width: 100%; height: 500px;"></div>
    </div>
 
    <script type="text/javascript">
 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Asset Name', 'Active', 'Inactive'],
 
           <?php
              foreach($orders as $order) {
                  echo "['".$order->type."', '".$order->active."', '".$order->inactive."'],";
              }
            ?>
        ]);
 
        var options = {
          chart: {
            title: 'Bar Graph | status',
            subtitle: 'Active, Inactive',
          },
          bars: 'vertical'
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

</body>
</html>
</section>
@endsection