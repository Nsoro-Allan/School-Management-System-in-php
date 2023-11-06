<?php
    include("../connection.php");
    include("teacher_sessions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel - Courses</title>
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
                <h1>Teacher Courses</h1>
                <div class="line"></div>
            </div>

            <table>
                <tr>
                    <th>Teacher's Name</th>
                    <th>Teacher's Courses</th>
                </tr>

                <?php
                $teacher_name=$_SESSION['teacher_name'];

                $result=$con->query("SELECT * FROM teachers WHERE teacher_name='$teacher_name'");

                while ($row=mysqli_fetch_array($result)) {
            
                ?>

                <tr>
                    <td><?php echo $row['teacher_name'];?></td>
                    <td><?php echo $row['teacher_course'];?></td>
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