<?php

    include 'connection.php';
    $id = $_POST['id'];
    echo $id;
    $sql = "DELETE FROM enquiryform WHERE id = '$id'";
    // $sql2="DELETE FROM user WHERE signup_id = '$id'";
    $result = $conn->query($sql);
     // $result2 = $conn->query($sql2);
    if($result==TRUE)
    {
        header("location: enquiryfromsql.php");
    }

    else
    {
        echo " Error:".$sql."<br>".$conn->error;
    }

?>