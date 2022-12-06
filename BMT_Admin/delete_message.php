<?php 
include_once '../config.php';

    $sql = "DELETE FROM user_message WHERE msg_id ='" . $_GET["id"] . "'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Message Deleted');</script>";
        echo "<script type='text/javascript'> document.location ='mailbox.php'; </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
?>
