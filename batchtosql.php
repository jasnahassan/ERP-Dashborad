<?php
include 'connection.php';
$BtName = $_POST['course'];
$NOS= $_POST['bt_stno'];
$stime= $_POST['bt_stime'];
$etime= $_POST['bt_etime'];
$btime= $_POST['bt_btime'];
$tutorid= $_POST['tutor'];
$status= $_POST['bt_status'];
$courseid = explode("-",$BtName);
$course_name = $courseid[0];
$course_id = $courseid[1];
$result2=mysqli_query($conn,"select * from batch");
$c=mysqli_num_rows($result2);
$num=$c + 1;
$bid="CB100".$num;
$sql="INSERT INTO batch(batch_idgen,batch_name,no_of_students,start_time,end_time,batch_time,tutor_id,batch_status,course_id) VALUES('$bid','$course_name','$NOS','$stime','$etime','$btime','$tutorid','$status','$course_id')";
$result=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
         header("location: batches.php");
}
else
{
   
        echo "failed";
}

?> 