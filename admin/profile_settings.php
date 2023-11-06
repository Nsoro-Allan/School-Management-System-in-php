<?php
    include("../connection.php");
    include("admin_sessions.php");

    // Select Data From DB
    $sql=$con->query("SELECT * FROM `admin` WHERE 1");
    $row=mysqli_fetch_array($sql);

    // Update Data in DB
    if(isset($_POST['submit'])){

        $admin_email=$_POST['admin_email'];
        $admin_password=$_POST['admin_password'];
        
        $update=$con->query("UPDATE `admin` SET `admin_email`='$admin_email',`admin_password`='$admin_password' WHERE 1");

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
    <title>Admin Panel - Profile Settings</title>
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
                <label>Current Admin Email:</label>
                <input type="email" style="font-weight:bold;" name="admin_email" value="<?php
                echo $row['admin_email'];?>">

                <label>Current Admin Password:</label>
                <input type="text" style="font-weight:bold;" name="admin_password" value="<?php
                echo $row['admin_password'];?>">

                <button type="submit" name="submit">Update Profile Settings</button>

            </form>


        </div>
    </section>

</div>

</body>
</html>