<?php
    include("../connection.php");
    include("teacher_sessions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel - Student Marks</title>
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
                <h1>Student Marks</h1>
                <div class="line"></div>
            </div>

            <table>
                <tr>
                    <th>Student Name</th>
                    <th>Student Class</th>
                    <th>Student Course</th>
                    <th>Student Marks</th>
                    <th>Actions</th>
                </tr>

                <?php
                $teacher_name=$_SESSION['teacher_name'];

                $sql=$con->query("SELECT teacher_course AS teacher_course  From teachers WHERE teacher_name='$teacher_name'");
                $row=mysqli_fetch_array($sql);

                $teacher_course=$row["teacher_course"];

                ?>

                <?php
                $query=$con->query("SELECT * FROM marks WHERE student_course='$teacher_course'");

                while ($row = mysqli_fetch_array($query)) 
                {
                ?>                   
                <tr>

                    <td><?php echo $row['student_name'];?></td>

                    <td><?php echo $row['student_class'];?></td>

                    <td><?php echo $row['student_course'];?></td>

                    <td><?php echo $row['student_marks'];?></td>

                    <td><a href="./edit_student_marks.php?student_name=<?php echo $row['student_name'];?>">Edit Marks</a></td>

                </tr>

                <?php
                }               
                ?>
            </table>

        </div>
    </section>

</div>

</body>
</html>