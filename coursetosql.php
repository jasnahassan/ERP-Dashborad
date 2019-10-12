<?php
include 'connection.php';
$Name = $_POST['course'];
$Duration = $_POST['duration'];
$Fee= $_POST['fee'];
$sql2 = "SELECT * FROM  course";
$result2=mysqli_query($conn,"select * from course");
$c=mysqli_num_rows($result2);
$num=$c + 1;
$bid="CC100".$num;
$sql="INSERT INTO course(course_idgen,course_name,course_duration,course_fee) VALUES('$bid','$Name','$Duration','$Fee')";
$result=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
        header("location: courses.php");
}
else
{
   
        echo "failed";
}

?> 