<?php
include 'connection.php';
$EventName = $_POST['ev_name'];
$Date= $_POST['ev_date'];
$Category= $_POST['ev_category'];
$Details= $_POST['ev_details'];
$sql="INSERT INTO events(event_name,eventdate,category,details) VALUES('$EventName','$Date','$Category','$Details')";
$result=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
         header("location: eventsview.php");
}
else
{
   
        echo "failed";
}

?> 