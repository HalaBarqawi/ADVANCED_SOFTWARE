<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vgame";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $email=$password=$emailErr=$passwordErr=$error="";


    if(isset($_POST['login'])){
        if(empty(test_input($_POST["email"]) ) )
        {
            $emailErr="Enter Email";
        }
        else{
            $email=test_input($_POST["email"]);
            session_start();
            $_SESSION["email"]=$email;
            header("location:account.php");
        }
        if(empty(test_input($_POST["password"]))){
            $password = "Enter Password";}
        else{
            $password=test_input($_POST["password"]);
        }

    }
    if(empty(!($emailErr)&&empty($password))){
        $stmt=$conn->query("select * from user
    where email='$email' and  password ='$password';");

        if($stmt->execute()){
            if($stmt->rowCount()== 1){
                header("location:Home.php");
            }

            else{
                echo '<script type="text/javascript">
             alert("email or password not correct");
              </script>';
            }
        }
    }

}//try
catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

function test_input($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>


</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
b{
    font-family: montserrat;
    color: #31315F;
    font-size: 30px;
}
    .btn{
        width: 250px;
        height: 50px;
        padding: 1%;
        border: none;
        font-size: 1rem;
        border-radius: 20px;
        font-family: montserrat;
        opacity: 2;
        margin-left: 130px;
    }
    .btn-primary{
        background-color:#31315F;
        color: white;
        cursor: pointer;
    }
    .btn-primary:hover{
        color: white;
        background-color: #ff4757;
    }
    .rcorners1 {
        font-family: montserrat;
        border-radius:20px;
        border-color: #31315F;
        background: white;
        width: 250px;
        height: 50px;
    margin-top: 30px;
        margin-left: 20px;
        margin-right: 50px;



    }
    .c{
        border-radius: 50%;
        position: center;
        top:0;

        /*margin-bottom:400px;*/
        margin-left: 150px;
    }
    body{
        background-image: url("images/Hom.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .trans{
        margin: auto;
        padding: 100px;
        width: 500px;
        height:500px;
        position: center;
        background-color: white;
        opacity: 0.7;
        border-radius: 5%;
    }
</style>
<body>
<form action="login.php" method="post"


<div class="trans">
    <div >

        <img src="images/H.png"class="c" style="width:200px;height:200px;">

            <div style="text-align: center">
                <br>
                <b > Member Login</b>

                <br>

                    <img src="../VedioGames/images/email.png" class="img">

                    <input class="rcorners1" type="email" name="email" placeholder="Email" required>

                <br>

                <img src="../VedioGames/images/password.png" class="img2">
                <input class="rcorners1" type="password" name="password" placeholder="Password" required>
            </div>
        <br>
        <br>

        <input class="btn btn-primary" type="submit" name="login" value="Login"   >

        <?php $conn=null;?>
    </div>
</div>


</form>
</body>
</html>
