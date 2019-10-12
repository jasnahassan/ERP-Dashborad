<?php
include 'connection.php';
$id = $_GET['id'];
$value = $_GET['s'];
// echo "$id"."$value";

$sql="UPDATE tutor SET status ='$value' WHERE tutor_id ='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:regtutor.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>