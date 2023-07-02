<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = sha1($_POST['password']);
    $role = $_POST['role'];

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exists!';
    }else{
        $insert = " INSERT INTO users(userName, email, password, userRole) VALUES('$name', '$email', '$password', '$role') ";
        mysqli_query($conn, $insert);
        header('location: login.php');
    }
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
    <div class="container" style="margin-top: 100px;">
        <form action="" method="post">
            <h3>User Registration</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo "<p>$error</p>";
                };
            };
            ?>
            <input type="text" name="name" required placeholder="Enter your name"><br>
            <input type="email" name="email" required placeholder="Enter your email"><br>
            <input type="password" name="password" required placeholder="Enter your password"><br>
            <select name="role">
                <option value="doctor">Doctor</option>
                <option value="nurse">Nurse</option>
                <option value="pharmacist">Pharmacist</option>
            </select><br>
            <input type="submit" name="submit" class="btn">
        </form>
    </div>
    </center>
</body>
</html>