<?php
echo "<h1> Last 7 Day Patient Information </h1>";

$con=mysqli_connect('localhost','root','','patientdb');
$sql="select * FROM patientlist where Date > date_sub(now(), interval 7 day) ";
$res=mysqli_query($con,$sql);



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
<div class="jumbotron">
    

    
        
       

    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addPatient.html">Add New Patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/patientSerial/viewdata.php/" tabindex="-1" >View Patient List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="Payment_Details.html" tabindex="-1" >SEE PAYMENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="http://localhost/patientSerial/patientstatusc.php/" tabindex="-1" >See New Patient List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="http://localhost/patientSerial/oldpatients.php/" tabindex="-1" >OLD Patient List</a>
          </li>
      </ul>
    </div>

<a href="javascript:history.go(-1)"><button >GO BACK</button></a>

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

<table class="table table-hover" border="1">
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