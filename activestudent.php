<?php
include 'connection.php';
$id = $_GET['id'];
$value = $_GET['s'];
// echo "$id"."$value";

$sql="UPDATE student SET status ='$value' WHERE student_id ='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:student.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>