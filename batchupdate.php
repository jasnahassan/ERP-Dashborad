<?php
include 'connection.php';
$id = $_GET['id'];
$BtName = $_POST['bt_name'];
$NOS= $_POST['bt_stno'];
$stime= $_POST['bt_stime'];
$etime= $_POST['bt_etime'];
$btime= $_POST['bt_btime'];
$tutorid= $_POST['bt_tid'];
$status= $_POST['bt_status'];
$courseid= $_POST['bt_cid'];
$sql="UPDATE batch SET batch_name='$BtName', no_of_students='$NOS',start_time='$stime',end_time='$etime',batch_time='$btime',tutor_id='$tutorid',batch_status='$status',course_id='$courseid' where batch_id='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:batches.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>