<header>

<div class="logo">
    <center><img src="../imgs/favicon.ico" style="width:40%;"></center>
    <a href="./admin_panel.php">Admin Panel</a>
</div>

<div class="navlinks">
    <a href="./admin_panel.php"><img src="../imgs/dashboard.ico"> Dashboard</a>
    <a href="./available_students.php"><img src="../imgs/available_students.ico"> Available Students</a>
    <a href="./add_new_student.php"><img src="../imgs/add_student.ico"> Add a student</a>
    <a href="./available_teachers.php"><img src="../imgs/teachers.ico"> Available Teachers</a>
    <a href="./add_new_teacher.php"><img src="../imgs/add_teacher.ico"> Add a teacher</a>
    <a href="./student_marks.php"><img src="../imgs/student_marks.ico"> Student Marks</a>
    <a href="./profile_settings.php"><img src="../imgs/profile_settings.ico"> Profile Settings</a>
</div>

<div class="account-info">
    <p><?php echo $_SESSION['admin_email'];?></p>
    <a href="./admin_logout.php">Logout</a>
</div>

</header>