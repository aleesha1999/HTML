<?php
include("connect.php");
if($_POST){
$bookno=$_POST['bookno'];
$bookedition=$_POST['booked'];
$booktitle=$_POST['booktitle'];
$bookpub=$_POST['bookpub'];
$sql=mysquil_querry ($conn,"Insert into book values('$bookno','$booktitle','$bookedition','$bookpub')");
$query=mysquil_querry ($conn,"select*from book");}
?>
<html>
<head>
<title>Display Book Details</title>
</head>
<body>
<h2 align ="center">Book Detais</h2> <br>
</head>
<table align="center" border="1px solid black">
<tr>
<th>Book Number </th>
<th>Tittle </th>
<th>Edition </th>
<th>publisher </th>
</tr>
<tr>
<?php													  
while ($row =mysqli_fetch _assoc($query)){
echo"<tr>";
echo"<td>".$row['bookno']."</td>";
echo"<td>".$row ['booktitle']."</td>";
echo"<td>".$row['booked']."</td>";
echo"<td>".$row['bookpub']."</td>";
echo "</tr>";
}?>
</tr>
<table>
</body>
</html>  																																																																																																																																		































































































































































































































