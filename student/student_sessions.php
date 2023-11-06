<?php
session_start();

if(!$_SESSION['student_name']){
    header("location:index.php?msg=Login First...");
}

?>