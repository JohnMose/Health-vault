<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $gender = $_POST['gender'];

    $insert = " INSERT INTO public_info(fullName, gender, age) VALUES('$name', '$gender', '$age') ";
    mysqli_query($conn, $insert);
    header('location: doctorsViewPatients.php');

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <center>
    <div class="container"  style="margin-top: 100px;">
        <form method="post">
            <h3>Add Patient</h3>
            <input type="text" name="name" required placeholder="Enter patient's name"><br>
            <input type="number" name="age" required placeholder="Enter age"><br>
            <select name="gender">
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select><br>
            <input type="submit" name="submit" class="btn">
            <a href="doctorsViewPatients.php" role="button">Cancel</a>
        </form>
    </div>
    </center>
</body>
</html>