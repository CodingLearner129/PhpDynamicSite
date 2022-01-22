<?php
    include "./conn/conn.php";
    
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];

        $sql = "DELETE FROM `usersign` WHERE `id`='$user_id'";

        $resultSql = $conn->query($sql);

        if($resultSql == TRUE){
            echo "<script> alert('Deleted successfully!!!'); window.location.href='view.php';</script>";
        } else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>