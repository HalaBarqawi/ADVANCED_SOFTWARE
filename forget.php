<?php
$conn=new mysqli("localhost","root","","vgame");
if($conn->connect_errno){
    die("connection Failed!".$conn->connect_error);
}
?>
<?php
error_reporting(0);
$errors ='';
if(isset($_POST['forget']))
{   $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$conn->prepare("update user set password=? where email=?");
    $stmt->bind_param("ds",$password,$email);
    if($stmt->execute())
    {
        echo '<script type="text/javascript">
             alert("your password was updated go back to login page");
              </script>';
    }
    else
        echo '<script type="text/javascript">
             alert("Sorry, Your emails does not exists in our record database");
              </script>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <br><br><br><br><br><br>
    <meta charset="UTF-8">
    <title>Forget Password</title>
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
            background-size: 120%;
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
</head>
<body align="center">
<form method="post" action="forget.php">
<div class="sing-up-form">

        <h1 style="font-size:40px; color: #e65c00">Forget Password</h1>
        <div>
        <input class="rcorners1" type="email" name="email" id="email" placeholder="Email" required>
        <br>
        <input class="rcorners1" type="password" name="password" id="password" placeholder="New Password" required >
        <br>
        <button class="rcorners1" type="submit" class="login-btn" name="forget">
            UpDate Password
        </button>
            <button class="rcorners1" type="submit" class="login-btn" name="forget">
                <a href="../VedioGames/login.php">Go back to login</a>
            </button>
        </div>

    <?php $conn=null;?>
</div>
</form>
</body>
</html>
