<?php
//include 'connection.php';
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// $Name = $_POST['val-username'];
// $Email = $_POST['val-email'];
// $password=$_POST['val-password'];
// $joindate=$_POST['val-number'];
// $image=$_POST['val-pro'];
// $workpro=$_POST['val-pro'];
// $availability=$_POST['val-terms'];
// $idproof=$_POST['val-proof'];
// $Mobileno = $_POST['val-phoneus'];
// $Qualification=$_POST['val-quali'];
// $experience=$_POST['val-exp'];
// $doj=$_POST['val-range'];

// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) 
//     {
        

//         $sql2 = "SELECT * FROM  tutor";
// 		$result2=mysqli_query($conn,"select * from tutor");
// 		$c=mysqli_num_rows($result2);
// 		$num=$c + 1;
// 		$bid="CT100".$num;
// 		$sql="INSERT INTO tutor(tutor_idgen,tutor_name,tutor_email,password,joindate,tutor_image,work_professional,availability,id_proof,tutor_phone,tutor_edu_quali,tutor_experience,doj,status) VALUES('$bid','$Name','$Email','$password','$joindate','$image','$workpro','$availability','$idproof','$Mobileno','$Qualification','$experience','$doj','1')";
// 		$result=mysqli_query($conn,$sql);
// 		if(mysqli_affected_rows($conn)>0)
// 		{
// 		       header("location: regtutor.php");
// 		}
// 		else
// 		{
		   
// 		        echo "failed1";
// 		}

//     } else {
//         echo "File is not an image.";
   
//     }


		

// }
// else{
// 	echo "failed2";
// }
include 'connection.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file_id = $target_dir . basename($_FILES["fileToUpload_id"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType_id = strtolower(pathinfo($target_file_id,PATHINFO_EXTENSION));
$Name = $_POST['val-username'];
$Email = $_POST['val-email'];
$password=$_POST['val-password'];
$joindate=$_POST['val-number'];
//$image=$_POST['val-pro'];
$workpro=$_POST['val-pro'];
$availability=$_POST['val-terms'];
$idproof=$_POST['val-proof'];
$Mobileno = $_POST['val-phoneus'];
$Qualification=$_POST['val-quali'];
$experience=$_POST['val-exp'];
$doj=$_POST['val-range'];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $check_id = getimagesize($_FILES["fileToUpload_id"]["tmp_name"]);
    if($check !== false && $check_id !== false) {
        //echo "File is an image - " . $check["mime"] . ".".$Name;
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if (file_exists($target_file_id)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload_id"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" &&$imageFileType_id != "jpg" && $imageFileType_id != "png" && $imageFileType_id != "jpeg"
&& $imageFileType_id != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fileToUpload_id"]["tmp_name"], $target_file_id)) 
    {


      //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
     $image="".basename( $_FILES["fileToUpload"]["name"]);
     $image_id="".basename( $_FILES["fileToUpload_id"]["name"]);
     $result2=mysqli_query($conn,"select * from tutor");
     $c=mysqli_num_rows($result2);
     $num=$c + 1;
     $bid="CT100".$num;
 

     $sql="INSERT INTO tutor(tutor_idgen,tutor_name,tutor_email,password,joindate,tutor_image,work_professional,availability,id_proof,id_image,tutor_phone,tutor_edu_quali,tutor_experience,doj,status) VALUES('$bid','$Name','$Email','$password','$joindate','$image','$workpro','$availability','$idproof','$image_id','$Mobileno','$Qualification','$experience','$doj','1')";
      $sql2="INSERT INTO user_login( user_id,password,role,status) VALUES('$Email','$password','tutor','active')";

     $result=mysqli_query($conn,$sql);
      $result2=mysqli_query($conn,$sql2);
     if(mysqli_affected_rows($conn)>0)
     {
            header("location: regtutor.php");
     }
     else
     {
           
             echo "failed1";
     }



    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>