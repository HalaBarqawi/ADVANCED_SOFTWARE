
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

</head>
<body>
<?php
include('header.php');
?>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign UP</h3>
                <h8 style="color: #FFFFFF; font-size: 14px">Please fill in this form to create an account.</h8>
            </div>
            <div class="card-body">
                <form action="." class="login" method="POST">
                    <input type="hidden" name="action" value="out">


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" id='email' name="email" class="form-control" placeholder="username" required name="email">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id='pass' name="pass" class="form-control" placeholder="password" required name="password_1">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id='pass2' name="pass2" class="form-control" placeholder="repeat password" required name="password_2">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">   <p style="font-size: 10px;margin-top: 13px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    </div>
                    <div class="form-group">

                        <input type="submit" value="SIGN UP"  name="register_btn"  class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer" style="margin-bottom: 50px">
                <div class="d-flex justify-content-center links">

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>