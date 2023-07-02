<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patients Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body style="margin: 50px;">
    <div class="container">
        <h3>List of Patients</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Patient Number</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                @include 'config.php';

                $sql = " SELECT * FROM public_info ";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                    <td>$row[patientNo]</td>
                    <td>$row[fullName]</td>
                    <td>$row[gender]</td>
                    <td>$row[age]</td>
                    <td>
                        <a class='btn-light' href='sensitiveInfo.php?patientNo=$row[patientNo]'>More>></a>
                    </td>
                    </tr>";
                }
                ?>
               
            </tbody>
        </table>

    </div>
</body>
</html>