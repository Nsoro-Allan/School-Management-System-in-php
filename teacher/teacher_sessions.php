<?php
session_start();

if(!$_SESSION['teacher_name']){
    header("location:index.php?msg=Login First...");
}

?>