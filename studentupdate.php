<?php
include 'connection.php';
$id = $_GET['id'];
$Name = $_POST['val-username'];
$Email = $_POST['val-email'];
$address=$_POST['val-address'];
$joindate=$_POST['val-number'];
$gender=$_POST['val-gender'];
$batchid=$_POST['batchid'];
$studentstatus=$_POST['val-terms'];
$idproof=$_POST['val-proof'];
$Mobileno = $_POST['val-phoneus'];
$dob=$_POST['val-range'];
$sql="UPDATE student SET student_name='$Name', student_email='$Email',student_address='$address',student_dob='$dob',student_gender='$gender',student_phone='$Mobileno',id_proof='$idproof',student_status='$studentstatus',doj='$joindate',batch_id='$batchid' where student_id='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:student.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>