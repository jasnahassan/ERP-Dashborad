<?php
$servername="localhost";
$username="root";
$password="";
$dbname="address_book";
$conn =mysqli_connect($servername, $username, $password, $dbname);
if($conn==false)
{
die("connection failed;".mysqli_connect_error());

}
?>