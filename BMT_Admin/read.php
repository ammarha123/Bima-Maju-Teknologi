<?php 
include_once '../config.php';

    $sql = "UPDATE user_message SET read_status = 1 WHERE msg_id='" . $_GET["id"]. "'";

    if (mysqli_query($con, $sql)) { 
        header('Location: read_mail.php?id=' . $_GET["id"]);
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
?>
