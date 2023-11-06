<?php
    include("../connection.php");
    include("teacher_sessions.php");

    $teacher_name=$_SESSION['teacher_name'];

    // Count the Total number of teacher courses
    $sql=$con->query("SELECT COUNT(*) AS Total_Courses FROM teachers WHERE teacher_name='$teacher_name'");
    $row=mysqli_fetch_array($sql);
    $Total_Courses=$row["Total_Courses"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel - Dashboard</title>
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
                <h1>Dashboard</h1>
                <div class="line"></div>
            </div>
            <div class="dashboard-container">

                <div class="dashboard-content">
                    <img src="../imgs/teachers_dashboard.ico" alt="">

                    <h4>Total Number of Teacher Courses:</h4>

                    <a href="./teacher_courses.php">
                        <?php echo $Total_Courses;?>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>

</body>
</html>