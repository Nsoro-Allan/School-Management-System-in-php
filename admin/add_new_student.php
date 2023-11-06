<?php
    include("../connection.php");
    include("admin_sessions.php");

    if(isset($_POST['submit'])){
        $student_index=$_POST['student_index'];
        $student_name=$_POST['student_name'];
        $student_class=$_POST['student_class'];
        $student_dob=$_POST['student_dob'];
        $student_location=$_POST['student_location'];

        $insert=$con->query("insert into students values('','$student_index','$student_name','$student_class','$student_dob','$student_location')");

        if($insert){
            header("location:available_students.php?msg=Added student successfully");
        }

        else{
            echo"Failed to insert data....";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Add New Student</title>
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
                <h1>Add New Student</h1>
                <div class="line"></div>
            </div>

            <form action="" method="post">

                <label>Student Index N <sup>o</sup>:</label>
                <input type="text" name="student_index" placeholder="Enter Student Index Number...">

                <label>Student Name:</label>
                <input type="text" name="student_name" placeholder="Enter student name..." required>

                <label>Student Class:</label>
                <select name="student_class">
                    <option>Select a student class...</option>
                    <option>Level 3 Sod</option>
                    <option>Level 4 Sod</option>
                    <option>Level 5 Sod</option>
                </select>

                <label>Student DOB:</label>
                <input type="date" name="student_dob" required>

                <label>Student Location:</label>
                <select name="student_location">
                    <option>Select Student location</option>
                    <option>Kigali, Rwanda</option>
                    <option>Eastern Province, Rwanda</option>
                    <option>Western Province, Rwanda</option>
                    <option>Northern Province, Rwanda</option>
                    <option>Southern Province, Rwanda</option>
                </select>

                <button type="submit" name="submit">Register Student</button>

            </form>

        </div>
    </section>

</div>

</body>
</html>