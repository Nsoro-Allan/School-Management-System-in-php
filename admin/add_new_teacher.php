<?php
    include("../connection.php");
    include("admin_sessions.php");

    if(isset($_POST['submit'])){
        $teacher_name=$_POST['teacher_name'];
        $teacher_password=$_POST['teacher_password'];
        $teacher_course=$_POST['teacher_course'];

        $result=$con->query("insert into teachers value('','$teacher_name','$teacher_password','$teacher_course')");

        if($result){
            header("location:available_teachers.php?msg=Added New Teacher success fully...");
        }

        else{
            echo
            '
            <div class="error">
            <p><b>Failed to add new teacher !!!</b></p>
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
    <title>Admin Panel - Add New Teacher</title>
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
                <h1>Add New Teacher</h1>
                <div class="line"></div>
            </div>

            <form action="" method="post">

                <label>Teacher Name:</label>
                <input type="text" name="teacher_name" placeholder="Enter teacher name..." required>

                <label>Teacher Password:</label>
                <input type="password" name="teacher_password" placeholder="Enter teacher password..." required>

                <label>Teacher Courses:</label>
                <select name="teacher_course">
                    <option>Select a teacher course...</option>
                    <option>Mathematics</option>
                    <option>Physics</option>
                    <option>Web Application Development</option>
                    <option>Deploy Backend Application</option>
                    <option>Website Development</option>
                    <option>Website Deployment</option>
                    <option>Business Development</option>
                </select>

                <button type="submit" name="submit">Add New Teacher</button>

            </form>

        </div>
    </section>

</div>

</body>
</html>