<?php 
include_once '../config.php';

    $sql = "DELETE FROM list_service WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Service Deleted');</script>";
        echo "<script type='text/javascript'> document.location ='list_service.php'; </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
?>
