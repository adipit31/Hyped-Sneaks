<?php
    $conn = mysqli_connect("localhost","root","","customer_details");

    if(!$conn){
        die("connection failed: " .mysqli_connect_error());
    }
    echo"connected successfully";
    ?>