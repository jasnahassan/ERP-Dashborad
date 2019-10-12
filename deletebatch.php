<?php

    include 'connection.php';
    $id = $_GET['id'];
    // echo $id;
    $sql = "DELETE FROM batch WHERE batch_id = '$id'";
    // $sql2="DELETE FROM user WHERE signup_id = '$id'";
    $result = $conn->query($sql);
     // $result2 = $conn->query($sql2);
    if($result==TRUE)
    {
        header("location: batches.php");
    }

    else
    {
        echo " Error:".$sql."<br>".$conn->error;
    }

?>