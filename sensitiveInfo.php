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
        <h3>Patient</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Active Problems</th>                    
                </tr>
                <tr>
                    <a href="addActiveProblem.php"><button>Insert New</button></a>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Flue</td>
                    <td><a href="#">Delete</a></td>
                </tr>
               
            </tbody>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th>Allergies</th>
                </tr>
                <tr>
                    <a href="#"><button>Insert New</button></a>
                </tr>
            </thead>

            <tbody>
            <?php
                @include 'config.php';

                $sql = " SELECT Allergies FROM sensitive_info WHERE patientNo=2";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                    <td>$row[Allergies]</td>
                    
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th>Current Medication</th>
                </tr>
                <tr>
                    <a href="#"><button>Insert New</button></a>
                </tr>
            </thead>

            <tbody>
               
            </tbody>
        </table>
    </div>
</body>
</html>