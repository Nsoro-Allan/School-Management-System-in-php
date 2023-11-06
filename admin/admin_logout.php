<?php
session_start();
unset($_SESSION['admin_email']);

header("location:index.php?msg=Logged Out Successfully...");
?>
