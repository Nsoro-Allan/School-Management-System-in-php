<?php
session_start();

if(!$_SESSION['admin_email']){
    header("location:index.php?msg=Login First...");
}

?>