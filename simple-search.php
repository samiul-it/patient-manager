<?php
echo "<h1>Search from Last 7 Days Patient Information </h1>";

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body>

<input  id="myInput" type="text" placeholder="Search..">

<br><br>
<a href="javascript:history.go(-1)"><button >GO BACK</button></a>
<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->

<button onclick="myFunction()">Make a Print Copy</button>
<style>
    @media print{
        button{
            visibility: hidden;
        }
       
    }
</style>
<script>

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



// function myFunction() {
// window.print();
// }
</script>

<table class="table table-hover" id="myTable" border="1">
<tr>
<th>PatientID</th>
<th>Patient Name</th>
<th>Age</th>
<th>Phone</th>
<th>Payment</th>
<th>Serial</th>
<th>Status</th>
<th>Date</th>
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