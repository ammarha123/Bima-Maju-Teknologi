<?php 
include_once '../config.php';

    $sql = "DELETE FROM list_product WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Product Deleted');</script>";
        echo "<script type='text/javascript'> document.location ='list_product.php'; </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
?>
