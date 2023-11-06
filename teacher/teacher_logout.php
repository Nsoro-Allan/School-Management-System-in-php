<?php
session_start();
unset($_SESSION['teacher_name']);

header("location:index.php?msg=Logged Out Successfully...");
?>
