<?php
echo "<h1> Patient Information </h1>";
$text=$_POST['date'];

echo "Fees Collection Date ";
echo "<Strong>$text</Strong>  " ;
$temp=$text;
$con=mysqli_connect('localhost','root','','patientdb');
$sql="select * FROM patientlist where Date >= '$temp' and Date <= now() ";
$res=mysqli_query($con,$sql);



?>

<?php
// $con=mysqli_connect('localhost','root', '','patientdb');
// $id=$_POST['id'];
// $date=$_POST['date'];
$text=$_POST['date'];

echo "Fees Collection Date ";
echo "<Strong>$text</Strong>  " ;
$temp=$text;


?>




<?php
echo "<h1> Payment Amount </h1>";


$sql_qry = "SELECT SUM(Payment) AS count 
    FROM patientlist where Date >= '$temp' and Date <= now()
    ";

$duration = $con->query($sql_qry);
$record = $duration->fetch_array();
$total = $record['count'];

// echo $total;

echo "<div class='alert alert-danger' role='alert'>
<h1>     Total Amount:<b> $total/-BDT </b></h1>
</div>";

echo "<a href=\"javascript:history.go(-1)\"><button>GO BACK</button></a>";


?>











<!-- <?php

// $id=$_POST['id'];
// $date=$_POST['date'];
$text=$_POST['date'];

echo "Fees Collection Date ";
echo "<Strong>$text</Strong>  " ;
$temp=$text;


?> -->






<html>
    
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
<body>


<!-- <a href="javascript:history.go(-1)"><button >GO BACK</button></a> -->

<button onclick="myFunction()">Make a Print Copy</button>
<style>
    @media print{
        button{
            visibility: hidden;
        }
       
    }
</style>
<script>
function myFunction() {
window.print();
}
</script>

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