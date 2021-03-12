<?php
$con=mysqli_connect('localhost','root', '','patientdb');
// $id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$payment=$_POST['payment'];
$status=$_POST['status'];
$serial=10;
// echo $name;
// echo $age;
// echo $phone;
// echo $payment;
// echo $status;
echo("<a href='addPatient.html'>Add Patient</a> <br>");
echo("<a href='http://localhost/patientSerial/viewdata.php/'>Viwe Patient List</a>");
echo("<a href='http://localhost/patientSerial/printserial.php/'><button type='submit' >Print Serial</button></a>");


// $sql="insert into patientlist(Patientname,Patientage,Phone,Payment,Status)values('$name','$age','$phone','$payment','$status)";

$sql="insert into patientlist(Patientname,Patientage,Phone,Payment,Status)values('$name','$age','$phone','$payment','$status')";
mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>