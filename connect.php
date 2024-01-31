<?php
$servername="localhost";
$username="root";
$password=""
$dbname="mcadb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_errors)
{
die("connection failed:"$conn->connect_error);
}
?>
























