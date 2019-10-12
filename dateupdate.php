<?php
include 'connection.php';
$id = $_GET['id'];
$value = $_POST['Color'];  // Storing Selected Value In Variable
$date=date('Y-m-d');
switch($value)
{
   	case 'confirm':
	$sql="UPDATE enquiryform SET update_status ='$value',confirm_date='$date' WHERE id ='$id'";
	break;

	case 'followup':
	$sql="UPDATE enquiryform SET update_status ='$value' , followup_date='$date' WHERE id ='$id'";
	break;

	case 'reject':
	$sql="UPDATE enquiryform SET update_status ='$value' , reject_date='$date' WHERE id ='$id'";
	break; 
}

$result = $conn->query($sql);
if($result == TRUE)
{
    header("location:enquiryfromsql.php");
}
else{
    echo"error".$sql."<br>".$conn->error;
}

?>