<?php
include("connect.php");
?>
<html>
<head>
<title>Book Details</title>
</head>
<body>
<center>
<h2> Book details </h2>
<form action "display.php" method="POST">
Book Number:<input type ="text" name="bookno"> <br><br>
Book title:<input type ="text" name="booktitle"> <br><br>
Book Edition:<input type ="number" name="booked"> <br><br>
Book publisher:<input type ="text" name="bookpub" value ""> <br><br>
<input type ="submit" name=submit" value= "submit">
</center>
</body>
</html>








