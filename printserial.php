<?php
echo "<h1> Patient Serial  </h1>";
$con=mysqli_connect('localhost','root','','patientdb');
$sql="select * FROM patientlist where  Patientid=(SELECT MAX(Patientid) FROM patientlist)";
$res=mysqli_query($con,$sql);



?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
<body>

<a href="addPatient.html"><button >Add New Patient</button></a>

<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
window.print();
}
</script>

<table table table-hover border="1">
<tr>
<td>PatientID</td>
<td>Patient Name</td>
<td>Age</td>
<td>Phone</td>
<td>Payment</td>
<td>Serial</td>
<td>Status</td>
<td>Date</td>
</tr>

<?php
while($row=mysqli_fetch_assoc($res))
{ ?>
<tr>
<td bgcolor="red"><?php echo $row["Patientid"]; ?> </td>
<td bgcolor="green"><?php echo $row["Patientname"]; ?> </td>
<td td bgcolor="yellow"><?php echo $row["Patientage"]; ?> </td>
<td td bgcolor="yellow"><?php echo $row["Phone"]; ?> </td>
<td td bgcolor="yellow"><?php echo $row["Payment"]; ?> </td>
<td td bgcolor="yellow"><?php echo $row["Serial"]; ?> </td>
<td td bgcolor="yellow"><?php echo $row["Status"]; ?> </td>
<td td bgcolor="yellow"><?php echo $row["Date"]; ?> </td>
</tr>

<?php
}
?>

</table>
</body>
</html>