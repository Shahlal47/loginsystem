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

<br><br><br><br>

<?php

$username = $_POST['username'];
//echo $username;
$password = $_POST['password'];
//echo $password;

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");

$query = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//echo $row;
//print_r($row);
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
