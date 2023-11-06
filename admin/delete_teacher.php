<?php
include("../connection.php");

$teacher_id = $_GET['teacher_id'];

$result=$con->query("DELETE FROM `teachers` WHERE teacher_id = $teacher_id");

if($result){
    header("location:available_teachers.php?msg=deleted a teacher...");
}

else{
    echo
    '
    <div class="error">
    <p><b>Failed to delete teacher...</b></p>
    </div>
    ';
}

?>


