<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name = "vgame";
$errors = array();

$db= new PDO('mysql:host=localhost;dbname='.$db_name.  ';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


if(isset($_POST['reg'])){
    $fullName=$_POST['fullName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST["password"];


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullName)) { array_push($errors, "name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }


    $sql = "INSERT INTO user(fullName,email,phone,password) 
	 VALUES (?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert-> execute([$fullName,$email,$phone,$password]);
    if($result){
        session_start();
        $_SESSION["email"]=$email;
        header("location:Home.php");
    }
    else
        echo "something wrong please try again";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>


</head>
<style>


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
        margin-left: 230px;
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

        margin-left: 20px;
        margin-right: 50px;



    }
    .c{
        border-radius: 50%;
        position: center;
        top:0;
        width:150px;
        height: 150px;

        /*margin-bottom:400px;*/
        margin-left: 280px;

    }
    body{
        background-image: url("images/Hom.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .trans{
        margin: auto;

        width: 700px;
        height:700px;
        position: center;
        background-color: white;
        opacity: 0.7;
        border-radius: 5%;
    }
</style>
<body>
<form method="post">

<div class="trans">
    <div >
        <br>
        <br>
        <img src="images/H.png"class="c" style="width:200px;height:200px;">


        <div style="text-align: center">
            <br>

            <b >New Member Register </b>
            <br>
            <br>

                <img src="images/user.png" class="img">

                <input class="rcorners1" type="text" name="fullName" placeholder="Full-Name" required>

            <br>

                <img src="../VedioGames/images/email.png" class="img">

                <input class="rcorners1" type="email" name="email" placeholder="Email" required>

            <br>

                <img src="../VedioGames/images/phone.png" class="img">

                <input class="rcorners1" type="tel" name="phone" placeholder="05X-XX-XXX-XX"  required>


            <br>


                <img src="../VedioGames/images/password.png" class="img2">
                <input class="rcorners1" type="password" name="password" placeholder="password" required>
            <br>

        </div>
        <br>
        <input class="btn btn-primary" type="submit" id="reg" name="reg" value="Register" class="btn btn-primary">

    Already a member? <a href="../VedioGames/login.php">Sign in</a>

    </div>
</div>



</form>

</body>
</html>

