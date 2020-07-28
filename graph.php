<?php

    include "dbcon.php";

    $qry = "SELECT `state`, SUM(`confirmed`) `conf` FROM `cases` GROUP BY `state`";
    $result = mysqli_query($con, $qry);
    $chart_data = '';
    $data=mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_array($result))
    {
        $chart_data .= "[ '".$row["state"]."', '".$row["conf"]."'], ";
      }
      $chart_data = substr($chart_data, 0, -3);


 ?>



<html>
  <head>
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>
<body>
<div id="visualization" style="margin: 1em"> </div>

<script>
google.load('visualization', '1', {'packages': ['geochart']});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  var data = google.visualization.arrayToDataTable([
    ['State', 'Population'],
	 <?php echo $chart_data; ?>
  ]);
  
  var opts = {
    region: 'IN',
    displayMode: 'regions',
    resolution: 'provinces',
    width: 640, 
    height: 480
  };
  var geochart = new google.visualization.GeoChart(
      document.getElementById('visualization'));
  geochart.draw(data, opts);
};

</script>
</body>
</html>