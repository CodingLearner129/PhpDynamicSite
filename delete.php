<?php
    include "./conn/conn.php";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM `userinfodata` WHERE `id`='$id'";

        $result = $conn->query($query);

        if($result == TRUE){
            echo "<script> alert('Deleted successfully!!!'); window.location.href='view.php';</script>";
        } else{
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>