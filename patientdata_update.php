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



// $sql="insert into patientlist(Patientname,Patientage,Phone,Payment,Status)values('$name','$age','$phone','$payment','$status)";

$sql="insert into patientlist(Patientname,Patientage,Phone,Payment,Status)values('$name','$age','$phone','$payment','$status')";
mysqli_query($con,$sql);

?>


<?php
echo "<h1> Patient Serial  </h1>";

$sql2="select * FROM patientlist where  Patientid=(SELECT MAX(Patientid) FROM patientlist)";
$res=mysqli_query($con,$sql2);



?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
<body>


<a href="javascript:history.go(-1)"><button >GO BACK</button></a>
<button onclick="myFunction()">Print Serial Token</button>
<style>
    @media print{
        button{
            visibility: hidden;
        }
        h1{
            align:center;
        }
       
    }
</style>

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
<td ><?php echo $row["Patientid"]; ?> </td>
<td ><?php echo $row["Patientname"]; ?> </td>
<td ><?php echo $row["Patientage"]; ?> </td>
<td ><?php echo $row["Phone"]; ?> </td>
<td ><?php echo $row["Payment"]; ?> </td>
<td ><?php echo $row["Serial"]; ?> </td>
<td ><?php echo $row["Status"]; ?> </td>
<td ><?php echo $row["Date"]; ?> </td>
</tr>
<?php
}
?>

</table>
</body>
</html>