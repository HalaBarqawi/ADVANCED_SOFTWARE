<?php
//address of the server where db is installed
$servername = "localhost";
//username to connect to the db
//the default value is root
$username = "root";
//password to connect to the db
//this is the value you specified during installation of WAMP stack
$password = "";
//name of the db under which the table is created
$dbName = "videogames2";
//establishing the connection to the db.
$conn = new mysqli($servername, $username, $password, $dbName);
//checking if there were any error during the last connection attempt
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM videogames2 where Genre ='Sports'";
//storing the result of the executed query
$result = $conn->query($query);
$count =$result->num_rows;


$query = "SELECT * FROM videogames2 where Genre ='Platform'";
//storing the result of the executed query
$result = $conn->query($query);
$countp =$result->num_rows;


$query = "SELECT * FROM videogames2 where Genre ='Racing'";
//storing the result of the executed query
$result = $conn->query($query);
$countR =$result->num_rows;

$query = "SELECT * FROM videogames2 where Genre ='Puzzle'";
//storing the result of the executed query
$result = $conn->query($query);
$countPU =$result->num_rows;

$query = "SELECT * FROM videogames2 where Genre ='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countA =$result->num_rows;

$query = "SELECT * FROM videogames2 where Genre ='Misc'";
//storing the result of the executed query
$result = $conn->query($query);
$countM =$result->num_rows;

$query = "SELECT * FROM videogames2 where Genre ='Shooter'";
//storing the result of the executed query
$result = $conn->query($query);
$counts =$result->num_rows;
$jsonArray = array();
/*
$sportcount=0;
$platcount=0;
$Sports='Sports';
$row = $result->fetch_assoc();
//check if there is any data returned by the SQL Query
$x=16599;
while($x>0) {
    if ($row["Genre"] =='Sports') {
        $sportcount++;

    } elseif ($result == "Platform") {
        $platcount++;
    }
    $x--;
    $row["Genre"]++;
}
echo $sportcount;*/
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
            });
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>