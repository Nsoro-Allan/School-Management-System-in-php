<header>

<div class="logo">
    <center><img src="../imgs/favicon.ico" style="width:40%;"></center>
    <a href="./student_panel.php">Student Panel</a>
</div>

<div class="navlinks">
    <a href="./student_panel.php"><img src="../imgs/dashboard.ico"> Dashboard</a>

    <a href="./student_courses.php"><img src="../imgs/available_students.ico"> Student Courses</a>
    
    <a href="./student_marks.php"><img src="../imgs/student_marks.ico"> Student Marks</a>

</div>

<div class="account-info">
    <p><?php echo $_SESSION['student_name'];?></p>
    <a href="./student_logout.php">Logout</a>
</div>

</header>