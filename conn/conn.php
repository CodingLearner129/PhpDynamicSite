<?php
    $conn = mysqli_connect("localhost","root","","userdata");
    // $conn = mysqli_connect("localhost","root");
    if($conn){
        // mysqli_select_db($conn, "userdata");
        // echo "Connection successful...";
    } else{
        echo "Connection failed: " . mysqli_error();
    }
?>