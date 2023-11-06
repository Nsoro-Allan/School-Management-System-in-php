<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Home</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./imgs/favicon.ico" type="image/x-icon">
</head>
<body>

<style>

body{
    font-family:Roboto;
}    

.first-container{
    background:black;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    margin-top: 100px;
    width:520px;
    height:auto;
    padding:30px 10px;
    border-radius:15px;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.847);
}

.first-container img{
    width:20%;
}

.first-container h1{
    color: #fff;
    font-style:italic;
}

.first-container p{
    color:#fff;
    font-weight:bold;
}

.first-container-links{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-top:20px;
}

.first-container-links a{
    padding:8px 35px;
    border-radius:50px;
    background:#fff;
    color:black;
    border:1.5px solid #fff;
    font-weight:bold;
    text-decoration:none;
    margin:10px;
    cursor:pointer;
    font-size:0.9rem;
    transition:all ease-in-out 0.5s;
}

.first-container-links a:hover{
    background:transparent;
    color:#fff;
    border:1.5px solid #fff;
    transition:all ease-in-out 0.5s;
}

</style>

    <center>
        <div class="first-container">

        <div class="first-container-title">

            <img src="./imgs/favicon.ico" alt="">
            <h1>School Management System</h1>

        </div>

        <p>Login As:</p>

        <div class="first-container-links">

        <a href="./admin/" target="_blank">Admin</a>
        <a href="./teacher/" target="_blank">Teacher</a>
        <a href="./student/" target="_blank">Student</a>

        </div>

        </div>
    </center>

</body>
</html>