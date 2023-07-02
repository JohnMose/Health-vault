<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $activeProblems = mysqli_real_escape_string($conn, $_POST['activeProblems']);

    $insert = " INSERT INTO sensitive_info(activeProblems) VALUES('$activeProblems') ";
    mysqli_query($conn, $insert);
    header('location: viewPatients.php');
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Problems Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h3>Add Ailment</h3>
            <input type="text" name="activeProblems" required placeholder="Enter new diagnosis"><br>
            <input type="submit" name="submit" class="btn">
        </form>
    </div>
</body>
</html>