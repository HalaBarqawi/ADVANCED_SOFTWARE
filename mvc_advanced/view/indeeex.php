
<?php

require_once ('header.php');
?>
<?php

$connect = mysqli_connect("localhost", "root", "", "video-games");
$tab_query = "SELECT DISTINCT(Genre) FROM vgsales  ORDER BY Rank DESC";
$tab_result = mysqli_query($connect, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
$count=00;
while($row = mysqli_fetch_array($tab_result))
{
    if($i == 0)
    {
        $tab_menu .= '
   <li class="active"><a href="#'.$row["Genre"].'" data-toggle="tab">'.$row["Genre"].'</a></li>
  ';
        $tab_content .= '<div id="'.$row["Genre"].'" class="tab-pane fade in active">';
    }
    else
    {
        $tab_menu .= '
   <li><a href="#'.$row["Genre"].'" data-toggle="tab">'.$row["Genre"].'</a></li>
  ';
        $tab_content .= '
   <div id="'.$row["Genre"].'" class="tab-pane fade">
  ';
    }
    $product_query = "SELECT * FROM vgsales WHERE Genre  = '".$row["Genre"]."'";;
    $product_result = mysqli_query($connect, $product_query);
    $count=0;
    while($sub_row = mysqli_fetch_array($product_result))
    {
        $count=$count+1;
        if ($count < 10){
            $count="0".$count;
        }




        $tab_content .= '

        <div class="col-md-4" style="margin-bottom:36px;">
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
  color: rgba(255, 255, 255, 0.1">    '."$count".'</h2>
  <h3 style=" font-family: myFont ; font-weight: bold; color: #FFFFFF; margin-top: 45%">'.$sub_row["Name"].'</h3>
 
    </div>
    <div class="flip-card-back" >
    <div style="margin-top: 30px">
    <h1> MORE DETAILS</h1>
          <hr>
 
      <table style="width:100%">


  <tr>
    <td>Platform</td>
     
    <td>'.$sub_row["Platform"].'</td>

  </tr>

  <tr>
    <td>Publisher </td>
    
    <td>'.$sub_row["Publisher"].'</td>

  </tr>
  <tr>
    <td>Release Year</td>
    <td>'.$sub_row["Year"].'</td>
 
  </tr>


</table>
    </div>
        </div>
  </div>
</div>



  </div>
  ';
    }


    $tab_content .= '<div style="clear:both"></div></div>';
    $i++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    @font-face {
        font-family: myFirstFont;
        src: url(../image/PermanentMarker-Regular.ttf);
    }
    @font-face {
        font-family: myFont;
        src: url(../image/Orbitron-VariableFont_wght.ttf);
    }


    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #2c302d;

        background-image: url("image/img.jpg");


        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

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

        box-shadow: 25px 25px 50px #1b1c1b, -25px -25px 50px #2d302f;
        border-radius: 15px;}

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
    #more {display: none;}
    body, html {
        height: 100%;
        margin: 0;

    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
<body>

display_error();

<div class="container">



        <form action="searchpage.php" method="post" style="margin-top: 70px;" class="example">
            <input type="text" name="search" placeholder="Search">
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>

        </form>

    <h2 align="center"><br></a></h2>
    <br />
    <ul class="nav nav-tabs" style="">
        <?php
        echo $tab_menu;
        ?>
    </ul>
    <div class="tab-content" style="">
        <br />
        <?php
        echo $tab_content;
        ?>
    </div>
</div>


</body>
</html>