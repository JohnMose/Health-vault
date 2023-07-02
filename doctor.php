<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['doctor_name'])){
    // header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <center>
    <div class="container" style="margin-top: 100px;">
        <div>
            <h3>Hello, <span>Doctor</span></h3>
            <h1>Welcome <span><?php echo "$_SESSION[doctor_name]"?></span></h1>
            <!-- <p>This is the doctor's page</p> -->
        </div>

        <div class="container">
            <a href="doctorsViewPatients.php"><button>View Patients</button></a><br><br>
            <a href="logout.php"><button>Logout</button></a>

        </div>
    </div>
    </center>
</body>
</html>