<?php
session_start();
include("../connection.php");

if(isset($_POST['submit'])){
    $student_index=$_POST['student_index'];
    $student_name=$_POST['student_name'];

    $login=$con->query("SELECT * FROM students WHERE student_index='$student_index' AND student_name='$student_name'");

    if($row=$login->fetch_assoc()){
        $_SESSION['student_name'] = $student_name;
        $_SESSION['student_index'] = $student_index;
        header("location:student_panel.php?msg=Logged In Successfully...");
    }

    else{
        echo
        '
        <div class="error">
        <center>
        <p><b>You Have Entered Invalid <br> Student Index N <sup>o</sup> &nbsp; OR &nbsp; Student Name !!!</b></p>
        </center>
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
    <title>Student Panel - Login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
</head>
<body>

    <div class="login-container">

    <form action="" method="post">
        <div class="title">
            <h1><a href="./index.php" style="text-decoration:none; color:black;">Student - Login</a></h1>
            <div class="line"></div>
        </div>

        <label>Student Index N <sup>o</sup>:</label>
        <input type="text" name="student_index" placeholder="Enter your Student Name..." required>

        <label>Student Name:</label>
        <input type="text" name="student_name" placeholder="Enter your Student Name..." required>

        <button type="submit" name="submit">Login</button>

    </form>

    </div>

</body>
</html>