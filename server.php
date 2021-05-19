<?php 
    $conn = mysqli_connect("localhost", "root", "root", "data") or die("Connection failed: " . mysqli_error($conn));
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>