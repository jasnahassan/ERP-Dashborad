<?php
include 'connection.php';
$id = $_GET['id'];
$Name = $_POST['val-username'];
$Email = $_POST['val-email'];
$password=$_POST['val-password'];
$joindate=$_POST['val-range'];
$image=$_POST['val-pro'];
$workpro=$_POST['val-pro'];
$availability=$_POST['val-terms'];
$idproof=$_POST['val-proof'];
$Mobileno = $_POST['val-phoneus'];
$Qualification=$_POST['val-quali'];
$experience=$_POST['val-exp'];
$doj=$_POST['val-number'];
$sql="UPDATE tutor SET tutor_name='$Name',tutor_email='$Email',password='$password',joindate='$joindate',work_professional='$workpro',tutor_phone='$Mobileno',tutor_edu_quali='$Qualification',tutor_experience='$experience',doj='$doj' where tutor_id='$id'";
$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:regtutor.php");   
}
else{
    echo"error".$sql."<br>".$conn->error;
}



?>