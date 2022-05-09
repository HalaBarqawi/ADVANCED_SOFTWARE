<?php
$errors   = array();
function Login($username,$password)
{
    global $db;
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$username' AND password='$password' LIMIT 1";
    $results = mysqli_query($db, $query);
    //  $statement = $db->prepare($query);
    //$statement->bindValue(':username', $username);
    // $statement->bindValue(':password', $password);
    //$statement->execute();
    //$results = $statement->fetchAll();
    if (mysqli_num_rows($results) == 1) { // user found
        // check if user is admin or user
        $logged_in_user = mysqli_fetch_assoc($results);

        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success'] = "You are now logged in";

        //     $statement->closeCursor();
        return $results;
    }
}
function chart(){
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

$query = "SELECT * FROM vgsales where Genre ='Sports'";
//storing the result of the executed query
$result = $conn->query($query);
$count =$result->num_rows;


$query = "SELECT * FROM vgsales where Genre ='Platform'";
//storing the result of the executed query
$result = $conn->query($query);
$countp =$result->num_rows;


$query = "SELECT * FROM vgsales where Genre ='Racing'";
//storing the result of the executed query
$result = $conn->query($query);
$countR =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Puzzle'";
//storing the result of the executed query
$result = $conn->query($query);
$countPU =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countA =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Misc'";
//storing the result of the executed query
$result = $conn->query($query);
$countM =$result->num_rows;

$query = "SELECT * FROM vgsales where Genre ='Shooter'";
//storing the result of the executed query
$result = $conn->query($query);
$counts =$result->num_rows;
$jsonArray = array();
///////
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
//////////////

$query = "SELECT * FROM vgsales where Year=2001 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp1 =$result->num_rows;


$query = "SELECT * FROM vgsales where Year=2002 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp2 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2003 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp3 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2004 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp4 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2005 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp5 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2006 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp6 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2007 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp7 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2008 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp8 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2009 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp9 =$result->num_rows;

$query = "SELECT * FROM vgsales where Year=2010 AND Genre='Action'";
//storing the result of the executed query
$result = $conn->query($query);
$countp10 =$result->num_rows;
return $result;
}
function Sign($email,$npass,$pass2){
    global $db , $errors;
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($npass)) {
        array_push($errors, "Password is required");
    }
    if ($npass != $pass2) {
        array_push($errors, "The two passwords do not match");
    }

    $password = md5($npass);//encrypt the password before saving in the database


    $query = "INSERT INTO users ( email, user_type, password) 
					  VALUES( '$email', 'user', '$password')";
    $results =mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) { // user found
        // check if user is admin or user
        $logged_in_user = mysqli_fetch_assoc($results);
        if ($logged_in_user['user_type'] == 'admin') {

            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success']  = "You are now logged in";

        }else{
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success']  = "You are now logged in";


        }
    }else {
        array_push($errors, "Wrong username/password combination");
    }

    return $results;
}
function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
        foreach ($errors as $error){
            echo $error .'<br>';
        }
        echo '</div>';
    }
}