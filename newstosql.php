<?php
include 'connection.php';
$Email = $_POST['EMAIL'];
$sql="INSERT INTO news_letter(email) VALUES('$Email')";
$result=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
         header("location: index.php");
}
else
{
   
        echo "failed";
}

?> 