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

$query = "SELECT * FROM videogames2 where Year=2001 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp1 =$result->num_rows;


$query = "SELECT * FROM videogames2 where Year=2002 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp2 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2003 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp3 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2004 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp4 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2005 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp5 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2006 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp6 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2007 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp7 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2008 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp8 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2009 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp9 =$result->num_rows;

$query = "SELECT * FROM videogames2 where Year=2010 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp10 =$result->num_rows;
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
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    text: "number of Action games for each year",
                    horizontalAlign: "left"
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
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>