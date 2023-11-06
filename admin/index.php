<?php
session_start();
include("../connection.php");

if(isset($_POST['submit'])){
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];

    $login=$con->query("select * from admin where admin_email='$admin_email' AND admin_password='$admin_password'");

    if($row=$login->fetch_assoc()){
        $_SESSION['admin_email'] = $admin_email;
        header("location:admin_panel.php?msg=Logged In Successfully...");
    }

    else{
        echo
        '
        <div class="error">
        <p><b>You Have Entered Invalid Email or Password !!!</b></p>
        </div>
        ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
</head>
<body>

    <div class="login-container">

    <form action="" method="post">
        <div class="title">
            <h1><a href="./index.php" style="text-decoration:none; color:black;">Admin - Login</a></h1>
            <div class="line"></div>
        </div>
        <label>Email:</label>
        <input type="email" name="admin_email" placeholder="Enter your Admin email..." required>

        <label>Password:</label>
        <input type="password" name="admin_password" placeholder="Enter your Admin password..." required>

        <button type="submit" name="submit">Login</button>

    </form>

    </div>

</body>
</html>