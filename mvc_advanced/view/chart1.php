<?php
require_once ('header.php');
//address of the server where db is installed
?>




<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                exportEnabled: true,
                animationEnabled: true,
                title: {
                    text: "COUNT FOR EACH VIEDO GAMES TYPE "
                },
                data: [{
                    type: "pie",
                    startAngle: 25,
                    toolTipContent: "<b>{label}</b>: {y}",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - {y}",
                    dataPoints: [
                        { y: <?php echo $countM ?>, label: "Misc" },
                        { y: <?php echo  $countp ?>, label: "Platform" },
                        { y: <?php echo $countPU ?>, label: "Puzzle" },
                        { y: <?php echo $count ?>, label: "Sports" },
                        { y: <?php echo$countA ?>, label: "Action" },
                        { y: <?php echo $countR ?>, label: "Racing" },
                        { y: <?php echo $counts ?>, label: "Shooter" }
                    ]
                }]
            }
            );
            chart.render();
            var chart1 = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Number of games in each year"

                },
                axisY: {
                    title: "Count"
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "Years",
                    dataPoints: [
                        { y:<?php echo $count1 ?>, label: "2001" },
                        { y: <?php echo $count2 ?>,  label: "2002" },
                        { y: <?php echo $count3 ?>,  label: "2003" },
                        { y: <?php echo $count4?>,  label: "2004" },
                        { y: <?php echo $count5 ?>,  label: "2005" },
                        { y: <?php echo $count6 ?>, label: "2006" },
                        { y: <?php echo $count7 ?>,  label: "2007" },
                        { y: <?php echo $count8 ?>,  label: "2008" },
                        { y: <?php echo $count9 ?>,  label: "2009" },
                        { y: <?php echo $count10 ?>,  label: "2010" }
                    ]
                }]
            });
            chart1.render();

            var chart2 = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                title:{
                    text: "Number of Action games for each year",

                },
                data: [{
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabelFontSize: 17,
                    indexLabel: "{label} - #percent%",
                    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    dataPoints: [
                        { y:<?php echo $countp1 ?>, label: "2001" },
                        { y: <?php echo $countp2 ?>,  label: "2002" },
                        { y: <?php echo $countp3 ?>,  label: "2003" },
                        { y: <?php echo $countp4?>,  label: "2004" },
                        { y: <?php echo $countp5 ?>,  label: "2005" },
                        { y: <?php echo $countp6 ?>, label: "2006" },
                        { y: <?php echo $countp7 ?>,  label: "2007" },
                        { y: <?php echo $countp8 ?>,  label: "2008" },
                        { y: <?php echo $countp9 ?>,  label: "2009" },
                        { y: <?php echo $countp10 ?>,  label: "2010" }
                    ]
                }]
            });
            chart2.render();
        }

    </script>

</head>
<body>
<div>
    <form action="." method="POST" class="login" >
    <input type="hidden" name="action" value="chart">
        </form>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <hr>
    <br>
    <br>
    <br>
 <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
    <br>
    <br>
    <br>

    <hr>
    <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>



</body>
</html>