<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = sha1($_POST['password']);

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['userRole'] == 'doctor'){
            $_SESSION['doctor_name'] = $row['name'];
            header('location:doctor.php');
        }else if($row['userRole'] == 'nurse'){
            $_SESSION['nurse_name'] = $row['name'];
            header('location:nurse.php');
        }else if($row['userRole'] == 'pharmacist'){
            $_SESSION['pharmacist_name'] = $row['name'];
            header('location:pharmacist.php');
        }
    } else{
        $error[] = 'incorrect email or password!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <center>
    <div style="margin-top: 100px;" class="container" id="logindiv">
        <form action="" method="post">
            <h3>User Login</h3>
            
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span>Incorrect email or password</span>';
                };
            };
            ?>
            <br>
            <input type="email" name="email" required placeholder="Enter your email"><br>
            <input type="password" name="password" required placeholder="Enter your password"><br>
            <input type="submit" name="submit" class="btn-light" role="button">
        </form>
    </div>
    </center>
</body>
</html>