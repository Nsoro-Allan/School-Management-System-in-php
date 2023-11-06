<?php
    include("../connection.php");
    include("teacher_sessions.php");

    $student_name=$_GET['student_name'];
    if(isset($_POST['submit'])){
    $student_name=$_POST['student_name'];
    $student_class=$_POST['student_class'];
    $student_marks=$_POST['student_marks'];
    $student_course=$_POST['student_course'];

    $update=$con->query("UPDATE `marks` SET `student_name`='$student_name',`student_class`='$student_class', `student_marks`='$student_marks',`student_course`='$student_course' WHERE student_name='$student_name' AND student_course='$student_course'");

    if($update){
        header("location:student_marks.php?msg=Updated Marks..");
    }

    else{
        echo
        '
        <div class="error">
        <p><b>Failed to update student marks...</b></p>
        </div>
        ';
    }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel - Edit Student Marks</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">

</head>
<body>

<style>

input{
    width:15%;
    height:37px;
    margin-left:10px;
    border-radius:6px;
    padding:5px;
    border:1.5px solid black;
}

select{
    width:auto;
    height:37px;
    margin-left:10px;
    border:1.5px solid black;
}

button{
    background:black;
    color:#fff;
    border-radius:6px;
    border:none;
    cursor:pointer;
    margin-left:10px; 
    width:auto; 
    padding:10px;
    font-weight:bold;
    border:1.5px solid black;
    transition:all ease-in-out 0.4s;
}

button:hover{
    background:transparent;
    color:black;
    border:1.5px solid black;
    transition:all ease-in-out 0.4s;
}
</style>

<div class="main-container">

<?php
    include("sidebar.php");
?>

    <section>
        <div class="container">
            <div class="title">
                <h1>Edit Student Marks</h1>
                <div class="line"></div>
            </div>

            <table>
                <tr>
                    <th>Student Name</th>
                    <th>Student Class</th>
                    <th>Student Course</th>
                    <th>Student Marks</th>
                </tr>

                <?php
                $teacher_name=$_SESSION['teacher_name'];

                $sql=$con->query("SELECT teacher_course AS teacher_course  From teachers WHERE teacher_name='$teacher_name'");
                $row=mysqli_fetch_array($sql);

                $teacher_course=$row["teacher_course"];

                ?>

                <?php
                $student_name=$_GET['student_name'];
                $query=$con->query("SELECT * FROM marks WHERE student_name='$student_name' AND student_course='$teacher_course'");

                while ($row = mysqli_fetch_array($query)) 
                {
                ?>                   
                <tr>
                <form action="" method="post" style="                     display:flex; flex-direction:row; align-items:center; justify-content: center; padding:5px; margin-top:-10px; box-shadow:none;">

                    <td>
                <input type="text" name="student_name" style="width:auto; font-size:0.9rem; text-align:center; font-weight:bold; text-transform:capitalize; outline:none; border:none; background:transparent;" value="<?php echo $row['student_name'];?>" readonly>
                </td>

                    <td>
                <input type="text" name="student_class" style="width:auto; font-size:0.9rem; text-align:center; font-weight:bold; text-transform:capitalize; outline:none; border:none; background:transparent;" value="<?php echo $row['student_class'];?>" readonly>
                </td>

                <td>
                <input type="text" name="student_class" style="width:auto; font-size:0.9rem; text-align:center; font-weight:bold; text-transform:capitalize; outline:none; border:none; background:transparent;" value="<?php echo $row['student_course'];?>" readonly>
                </td>


                    <td>
                        <input type="number" name="student_marks" pattern="[0-9]{3}" title="Please Enter Valid Marks." value="<?php echo $row['student_marks'];?>" style="width:30%;"  required>

                        <select name="student_course" >
                            <option>
                                <?php echo $row['student_course'];?>
                            </option>
                        </select>

                        <button type="submit" style="margin-top:10px;" name="submit">Update Marks</button>

                        </form>
                    </td>


                </tr>

                <?php
                }               
                ?>
            </table>

        </div>
    </section>

</div>

</body>
</html>