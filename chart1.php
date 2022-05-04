<?php
require_once ('header.php');
//address of the server where db is installed
$servername = "localhost";
//username to connect to the db
//the default value is root
$username = "root";
//password to connect to the db
//this is the value you specified during installation of WAMP stack
$password = "";
//name of the db under which the table is created
$dbName = "video-games";
//establishing the connection to the db.
$conn = new mysqli($servername, $username, $password, $dbName);
//checking if there were any error during the last connection attempt
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM vgsales where Genre ='Sports'";
//storing the result of the executed query
$result = $conn->query($query);
$count =$result->num_rows;


$query = "SELECT * FROM vgsales where Genre ='Platform'";
//storing the result of the executed query
$result = $conn->query($query);
$countp =$result->num_rows;


$query = "SELECT * FROM vgsales where Genre ='Racing'";
//storing the result of the executed query
$result = $conn->query($query);
$countR =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Puzzle'";
//storing the result of the executed query
$result = $conn->query($query);
$countPU =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countA =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Misc'";
//storing the result of the executed query
$result = $conn->query($query);
$countM =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Shooter'";
//storing the result of the executed query
$result = $conn->query($query);
$counts =$result->num_rows;
$jsonArray = array();
///////
$query = "SELECT * FROM vgsales where Year=2001";
//storing the result of the executed query
$result = $conn->query($query);
$count1 =$result->num_rows;


$query = "SELECT * FROM vgsales where Year=2002";
//storing the result of the executed query
$result = $conn->query($query);
$count2 =$result->num_rows;


$query = "SELECT * FROM vgsales where Year=2003";
//storing the result of the executed query
$result = $conn->query($query);
$count3 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2004";
//storing the result of the executed query
$result = $conn->query($query);
$count4 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2005";
//storing the result of the executed query
$result = $conn->query($query);
$count5 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2006";
//storing the result of the executed query
$result = $conn->query($query);
$count6 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2007";
//storing the result of the executed query
$result = $conn->query($query);
$count7 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2008";
//storing the result of the executed query
$result = $conn->query($query);
$count8 =$result->num_rows;

$query = "SELECT * FROM  vgsales where Year=2009";
//storing the result of the executed query
$result = $conn->query($query);
$count9 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2010";
//storing the result of the executed query
$result = $conn->query($query);
$count10 =$result->num_rows;
//////////////

$query = "SELECT * FROM vgsales where Year=2001 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp1 =$result->num_rows;


$query = "SELECT * FROM vgsales where Year=2002 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp2 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2003 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp3 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2004 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp4 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2005 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp5 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2006 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp6 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2007 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp7 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2008 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp8 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2009 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp9 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2010 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp10 =$result->num_rows;
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