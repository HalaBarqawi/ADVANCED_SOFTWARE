<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="view/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <style>
        body, html {

            margin: 0;
            font-family: "Audiowide", sans-serif;
        }

    </style>
</head>
<body>
<?php

   include ('view/header1.php');

?>
<div class="container">

    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <form action="." method="POST" class="login" >
                    <input type="hidden" name="action" value="login">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
            </div>
            <div class="card-body">

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" id="username" name="username" class="form-control" placeholder="username" required name="username">

                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" id="password" name="password" class="form-control" required name="password" placeholder="password">
                </div>
                <div class="row align-items-center remember">
                    <input type="checkbox">Remember Me
                </div>
                <?php echo display_error(); ?>
                <div class="form-group">
                    <input type="submit" value="Login"  id="login_btn"  name="login_btn" class="btn float-right login_btn">
                </div>

            </div>

            <div class="card-footer" style="margin-bottom: 50px">
                <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="view/SIGNUPPP.php" style="color: #f4511e">Sign Up</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
