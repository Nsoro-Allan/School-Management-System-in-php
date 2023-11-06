<?php
    include("../connection.php");
    include("admin_sessions.php");

    $teacher_id=$_GET['teacher_id'];

    // Select Code
    $sql=$con->query("SELECT * FROM `teachers` WHERE teacher_id=$teacher_id LIMIT 1");

    $row=mysqli_fetch_assoc($sql);

    // Update Code
    if(isset($_POST['submit'])){
        $teacher_name=$_POST['teacher_name'];
        $teacher_password=$_POST['teacher_password'];
        $teacher_course=$_POST['teacher_course'];

        $result=$con->query("UPDATE `teachers` SET `teacher_name`='$teacher_name',`teacher_password`='$teacher_password',`teacher_course`='$teacher_course' WHERE teacher_id=$teacher_id");

        if($result){
            header("location:available_teachers.php?msg=updated data successfully...");
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
    <title>Admin Panel - Edit Teacher</title>
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
                <h1>Edit Teacher</h1>
                <div class="line"></div>
            </div>

            <form action="" method="post">

                <label>Teacher Name:</label>
                <input type="text" name="teacher_name" value="<?php echo $row['teacher_name'];?>">

                <label>Teacher Password:</label>
                <input type="text" name="teacher_password" value="<?php echo $row['teacher_password'];?>">


                <label>Teacher Courses:</label>
                <input type="text" name="teacher_course" value="<?php echo $row['teacher_course'];?>">

                <button type="submit" name="submit">Update Teacher Data</button>

            </form>

        </div>
    </section>

</div>

</body>
</html>