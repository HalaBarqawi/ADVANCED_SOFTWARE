
<?php

require_once ('header.php');
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'video-games');
if(isset($_POST['submit-search'])){
$search=mysqli_real_escape_string($conn,$_POST['search']);
$sql="SELECT * FROM vgsales WHERE Name lIKE '%$search%' OR Platform LIKE '%$search%' OR Publisher LIKE '%$search%'
        OR Year LIKE '%$search%' ";

$result=mysqli_query($conn,$sql);
$queryResult=mysqli_num_rows($result);

$r= "There are".$queryResult."results! \n ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!-- Bootstrap CDN -->
</head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 250px;
            height: 250px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #444444;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
    <body>
    <div style="margin-left: 210px">
<h1>
    Search page
    <br>
    <h5>
    <?php
    echo $r;
    ?>
    </h5>
</h1>
    </div>
<br>

<div class="container">

    <?php


        if ( $queryResult > 0){
            $count =0;
            while ($row = mysqli_fetch_assoc($result)){

                $count=$count+1;
                if ($count < 10){
                    $count="0".$count;
                }
               print'      <div class="col-md-4" style="margin-bottom:36px;">
<div class="flip-card">
  <div class="flip-card-inner">
     <div class="flip-card-front" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
 
  text-align: center;
  background: #242625;">
  <h2 style=" position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
   font-family: myFirstFont;
  color: rgba(255, 255, 255, 0.1">    '.$count.'</h2>
  <h3 style=" font-family: myFont ; font-weight: bold; color: #FFFFFF; margin-top: 45%">'.$row["Name"].'</h3>
    </div>
    <div class="flip-card-back">
    <br>
      
       <hr>
        <p>Genre : '.$row["Genre"].'</p>
        <hr>
      <p>Platform : '.$row["Platform"].'</p> 
      <hr>
      
      <p>Publisher : '.$row["Publisher"].'</p>
      <hr>
      
    </div>
  </div>
</div>



  </div>';
            }
        }
        else{
            echo "There are no results matching your search ";
        }
    }
    ?>

</div>
    </body>