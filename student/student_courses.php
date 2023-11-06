<?php
    include("../connection.php");
    include("student_sessions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel - Courses</title>
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
                <h1>Student Courses</h1>
                <div class="line"></div>
            </div>

            <table>
                <tr>
                    <th>Student's Name</th>
                    <th>Student's Courses</th>
                </tr>

                <tr>
                    <td style="text-transform:capitalize; font-weight:bold;"><?php echo $_SESSION['student_name'];?></td>

                    <style>
                        ul{
                            list-style:none;
                        }
                        li{
                            margin-top:10px;
                            text-align:center;
                        }
                    </style>

                    <td>
                    <ul>
                      <li>Mathematics</li>

                      <li>Physics</li>

                      <li>Web Application Development</li>

                      <li>Deploy Backend Application</li>

                      <li>Website Development</li>

                      <li>Website Deployment</li>

                      <li>Business Development</li>

                    </ul>

                    </td>
                </tr>

            </table>

        </div>
    </section>

</div>

</body>
</html>