<?php
    include("../connection.php");
    include("teacher_sessions.php");

    // Select Data From DB
    $teacher_name=$_SESSION['teacher_name'];

    $result=$con->query("SELECT `teacher_name`, `teacher_password` FROM `teachers` WHERE teacher_name='$teacher_name'");

    $row=mysqli_fetch_array($result);

    // Update Data in DB
    if(isset($_POST['submit'])){

        $teacher_name=$_POST['teacher_name'];
        $teacher_password=$_POST['teacher_password'];
        
        $update=$con->query("UPDATE `teachers` SET `teacher_name`='$teacher_name',`teacher_password`='$teacher_password' WHERE teacher_name='$teacher_name'");

        if($update){
            header("location:profile_settings.php?msg=Updated Data Successfully...");
        }

        else{
            echo
            '
            <div class="error">
            <p><b>Failed to update data...</b></p>
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
    <title>Teacher Panel - Profile Settings</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">

</head>
<body>

<div class="main-container">

<?php
    include("sidebar.php");
?>

    <section>
        <div class="container">
            <div class="title">
                <h1>Profile Settings</h1>
                <div class="line"></div>
            </div>

            <form action="" method="post">
                <label>Current Teacher Name:</label>
                <input type="text" style="font-weight:bold;" name="teacher_name" value="<?php
                echo $row['teacher_name'];?>">

                <label>Current Teacher Password:</label>
                <input type="text" style="font-weight:bold;" name="teacher_password" value="<?php
                echo $row['teacher_password'];?>">

                <button type="submit" name="submit">Update Profile Settings</button>

            </form>


        </div>
    </section>

</div>

</body>
</html>