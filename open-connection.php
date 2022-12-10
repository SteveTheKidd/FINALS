<?php
    $con = mysqli_connect("localhost", "root", "shopping_cart");

    if($con === false)
        die("ERROR: Could not Connected" . mysqli_connect_error());
?>