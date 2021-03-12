<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

</body>
</html>



<?php
echo "<h1> Payment Amount </h1>";
$con=mysqli_connect('localhost','root','','patientdb');
$sql_qry = "SELECT SUM(Payment) AS count 
    FROM patientlist where Date >= '2021-02-01 13:17:44' and Date <= now()
    ";

$duration = $con->query($sql_qry);
$record = $duration->fetch_array();
$total = $record['count'];

// echo $total;

echo "<div class='alert alert-danger' role='alert'>
<h1>     Total Amount: $total/-BDT </h1>
</div>";


?>
