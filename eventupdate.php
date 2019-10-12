<?php
include 'connection.php';
$id = $_GET['id'];
$EventName = $_POST['ev-name'];
$Date= $_POST['ev-date'];
$Category= $_POST['ev-category'];
$Details= $_POST['ev-details'];
$sql="UPDATE events SET event_name='$EventName', eventdate='$Date',category='$Category',details='$Details' where event_id='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:eventsview.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>