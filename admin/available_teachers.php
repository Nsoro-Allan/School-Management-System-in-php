<?php
    include("../connection.php");
    include("admin_sessions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Available Teachers</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
</head>
<body>

<div class="main-container">

<?php
    include("sidebar.php");
?>

    <section>
        <div class="container">
            <div class="title">
                <h1>Available Teachers</h1>
                <div class="line"></div>
            </div>

            <table>
                <tr>
                    <th>#</th>
                    <th>Teacher Name</th>
                    <th>Teacher Password</th>
                    <th>Teacher Course</th>
                    <th>Actions</th>
                </tr>

                <?php
                $query=$con->query("Select * from teachers");

                while ($row = mysqli_fetch_array($query)) 
                {
                ?>                   
                <tr>
                    <td><?php echo $row['teacher_id'];?></td>

                    <td><?php echo $row['teacher_name'];?></td>

                    <td><?php echo $row['teacher_password'];?></td>

                    <td><?php echo $row['teacher_course'];?></td>


                    <td>
                    <a href="edit_teacher.php?teacher_id=<?php echo $row['teacher_id']?>">Edit</a>

                    <a href="delete_teacher.php?teacher_id=<?php echo $row['teacher_id']?>">Delete</a>
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