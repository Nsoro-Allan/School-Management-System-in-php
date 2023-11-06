<?php
include("../connection.php");

$student_id = $_GET['student_id'];

$result=$con->query("DELETE FROM `students` WHERE student_id = $student_id");

if($result){
    header("location:available_students.php?msg=deleted a student...");
}

else{
    echo
    '
    <div class="error">
    <p><b>Failed to delete student...</b></p>
    </div>
    ';
}

?>


