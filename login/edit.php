<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");
$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//var_dump($row ['id']);
//var_dump($row ['name']);
//var_dump($row ['email']);
//var_dump($row ['username']);
//var_dump($row ['password']);
//exit;
?>



<html>
    <head>
        <title>Update User Information</title>
    </head>

    <body style="text-align: center;">
        <form action="update.php" method="post">

            <tr>
                <td>

                    <a href="index.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="registration.php">Register</a> |
                    <a href="contact.php">Contact</a> |
                    <a href="help.php">Help</a>

                </td>
            </tr>

            <br><br><br><br><br><br>

            <input type="hidden" name="id" value="<?php echo $row['id'];?>">

            <label>Name:</label>
            <input type="text" name="<?php echo $row['name'];?>"><br><br>

            <label>Email:</label>
            <input type="email" name="<?php echo $row['email'];?>"><br><br>

            <label>Username:</label>
            <input type="text" name="<?php echo $row['username'];?>"><br><br>

            <label>Password:</label>
            <input type="password" name="<?php echo $row['password'];?>"><br><br>

            <input type="submit" name="submit" value="Update">
        </form>

    </body>
</html>