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
$dbName = "video-games";
//establishing the connection to the db.
$conn = new mysqli($servername, $username, $password, $dbName);
//checking if there were any error during the last connection attempt
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

?>
<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {



        }

    </script>

</head>
<body>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>