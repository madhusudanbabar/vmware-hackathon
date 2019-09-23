


<?php
 $page = $_SERVER['PHP_SELF'];
 $sec = "5";
 header("Refresh: $sec; url=$page");
 echo "Watch the page reload itself in 5 second!";
$output = shell_exec('date +%S');
$tmp = (float)$output;

echo $output;	
?>

<html>
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["chrome", <?php echo $tmp; ?>, "#b87333"],
        ["DevC++", 10.49, "silver"],
        ["Progisp", 19.30, "gold"],
        ["Atom", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 800,
        height: 600,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }

  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
  </body>
</html>

