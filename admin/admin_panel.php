<?php
    include("../connection.php");
    include("admin_sessions.php");

    // Count the Total number of students
    $sql=$con->query("SELECT COUNT(*) AS Total_Students FROM students");
    $row=mysqli_fetch_array($sql);
    $Total_Students=$row["Total_Students"];

    // Count the Total number of teachers
    $sql=$con->query("SELECT COUNT(*) AS Total_Teachers FROM teachers");
    $row=mysqli_fetch_array($sql);
    $Total_Teachers=$row["Total_Teachers"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
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
                    <img src="../imgs/students.ico" alt="">

                    <h4>Total Number of Students:</h4>

                    <a href="./available_students.php">
                        <?php echo $Total_Students;?>
                    </a>
                </div>

                <div class="dashboard-content">
                    <img src="../imgs/teachers_dashboard.ico" alt="">

                    <h4>Total Number of Teachers:</h4>

                    <a href="./available_teachers.php">
                        <?php echo $Total_Teachers;?>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>

</body>
</html>