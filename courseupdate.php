<?php
include 'connection.php';
$id = $_GET['id'];
$Name = $_POST['course'];
$Duration = $_POST['duration'];
$Fee= $_POST['fee'];
$sql="UPDATE course SET course_name='$Name', course_duration='$Duration',course_fee='$Fee' where course_id='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:courses.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>