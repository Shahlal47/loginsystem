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

session_start();
$_SESSION['loggedin'] = true;


//
//$username = $_POST['username'];
////echo $username;
//$password = $_POST['password'];
////echo $password;
//
//
//$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");
//
//$query = "SELECT * FROM users WHERE `username` = '$username'";
//
//$result = mysqli_query($link, $query);
//
//$row = mysqli_fetch_assoc($result);
//
////echo $row;
////print_r($row);
////var_dump($row['username']);
////var_dump($row['password']);
////var_dump($row['email']);
////exit;
//
//if($row != "NULL"){
//    if(($username == $row['username']) && ($password == $row['password'])){
//
//        //(SEND Data to the SESSION and GO to The Dashboard)
//
//        session_start();
//        $_SESSION['id']=$row['id'];
//        $_SESSION['name']=$row['name'];
//        $_SESSION['email']=$row['email'];
//        $_SESSION['username']=$row['username'];
//        $_SESSION['created']=$row['created'];
//
//        header('location: dashboard.php');
//
//
//    }
//    else{
//        //(Redirect to the Login page)
//        header('location:login.php');
//    }
//}

?>
