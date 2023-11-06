<header>

<div class="logo">
    <center><img src="../imgs/favicon.ico" style="width:40%;"></center>
    <a href="./teacher_panel.php">Teacher Panel</a>
</div>

<div class="navlinks">
    <a href="./teacher_panel.php"><img src="../imgs/dashboard.ico"> Dashboard</a>

    <a href="./teacher_courses.php"><img src="../imgs/add_teacher.ico"> Teacher Courses</a>
    
    <a href="./available_students.php"><img src="../imgs/available_students.ico"> Available Students</a>
    
    <a href="./student_marks.php"><img src="../imgs/student_marks.ico"> Student Marks</a>

    <a href="./add_student_marks.php"><img src="../imgs/student_marks.ico"> Add Student Marks</a>

    <a href="./profile_settings.php"><img src="../imgs/profile_settings.ico"> Profile Settings</a>
</div>

<div class="account-info">
    <p><?php echo $_SESSION['teacher_name'];?></p>
    <a href="./teacher_logout.php">Logout</a>
</div>

</header>