<html>
    <head>
    <title>Welcome to Login System</title>
    </head>

    <body style="text-align: center;">
        <tr>
            <td>
        <a href="index.php">Home</a> |
        <a href="login.php">Login</a> |
        <a href="registration.php">Register</a> |
        <a href="contact.php">Contact</a> |
        <a href="help.php">Help</a>

    </td>
        </tr>
    </body>
</html>


<?php

$username = $_POST['username'];
//echo $username;
$password = $_POST['password'];
//echo $password;

$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");

$query = "SELECT * FROM users WHERE username = $username";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['username']);
//exit;



if($row != "NULL"){
    if(($username == $row['username']) && ($password == $row['password'])){

        header('location:dashboard.php');
        //(SEND Data to the SESSION and GO to The Dashboard)

    }
    else{
        //(Redirect to the Login page)
        header('location:login.php');
    }
}

?>
