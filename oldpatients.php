<?php
//echo "<h1>OLD  Patient Information </h1>";
$con=mysqli_connect('localhost','root','','patientdb');
$sql="select * FROM patientlist Where status='old'";
$res=mysqli_query($con,$sql);



?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1 align="Center">Old Patient Information</h1>

<a href="addPatient.html"><button >Add New Patient</button></a>
<a href="javascript:history.go(-1)"><button >Go Back</button></a>

<button onclick="myFunction()">Make a Print Copy</button>
<style>
    @media print{
        body *{
            visibility: hidden;
        }
        .print-container ,.print-container *{
            visibility:visible;
        }
        h1{
            visibility:visible;
        }
    }
</style>

<script>


function myFunction() {
window.print();
}
</script>



<div class="print-container">
<table class="table table-hover " border="1">
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
</div>

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