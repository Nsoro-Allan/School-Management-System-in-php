<?php
session_start();
include("../connection.php");


if(isset($_POST['submit'])){
    $teacher_name=$_POST['teacher_name'];
    $teacher_password=$_POST['teacher_password'];

    $login=$con->query("select * from teachers where teacher_name='$teacher_name' AND teacher_password='$teacher_password'");

    if($row=$login->fetch_assoc()){
        $_SESSION['teacher_name'] = $teacher_name;
        header("location:teacher_panel.php?msg=Logged In Successfully...");
    }

    else{
        echo
        '
        <div class="error">
        <p><b>You Have Entered Invalid Teacher Name or Password !!!</b></p>
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
    <title>Teacher Panel - Login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
</head>
<body>

    <div class="login-container">

    <form action="" method="post">
        <div class="title">
            <h1><a href="./index.php" style="text-decoration:none; color:black;">Teacher - Login</a></h1>
            <div class="line"></div>
        </div>
        <label>Teacher Name:</label>
        <input type="text" name="teacher_name" placeholder="Enter your Teacher Name..." required>

        <label>Password:</label>
        <input type="password" name="teacher_password" placeholder="Enter your Teacher password..." required>

        <button type="submit" name="submit">Login</button>

    </form>

    </div>

</body>
</html>