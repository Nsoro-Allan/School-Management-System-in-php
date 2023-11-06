<?php
    include("../connection.php");
    include("admin_sessions.php");

    $student_id=$_GET['student_id'];

    // Select Code
    $sql=$con->query("SELECT * FROM `students` WHERE student_id=$student_id LIMIT 1");

    $row=mysqli_fetch_assoc($sql);

    // Update Code
    if(isset($_POST['submit'])){
        $student_index=$_POST['student_index'];
        $student_name=$_POST['student_name'];
        $student_class=$_POST['student_class'];
        $student_dob=$_POST['student_dob'];
        $student_location=$_POST['student_location'];

        $result=$con->query("UPDATE `students` SET `student_index`='$student_index',`student_name`='$student_name',`student_class`='$student_class',`student_dob`='$student_dob',`student_location`='$student_location' WHERE student_id=$student_id");

        if($result){
            header("location:available_students.php?msg=updated data successfully...");
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
    <title>Admin Panel - Edit Student</title>
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
                <h1>Edit Student</h1>
                <div class="line"></div>
            </div>

            <form action="" method="post">

                <label>Current Student Index N <sup>o</sup>:</label>
                <input type="text" name="student_index" value="<?php echo $row['student_index'];?>">

                <label>Current Student Name:</label>
                <input type="text" name="student_name" value="<?php echo $row['student_name'];?>">

                <label>Current Student Class:</label>
                <input type="text" name="student_class" value="<?php echo $row['student_class'];?>">

                <label>Current Student DOB:</label>
                <input type="text" name="student_dob" value="<?php echo $row['student_dob'];?>">

                <label>Current Student Location:</label>
                <input type="text" name="student_location" value="<?php echo $row['student_location'];?>">

                <button type="submit" name="submit">Update Student Data</button>
                
            </form>

        </div>
    </section>

</div>

</body>
</html>