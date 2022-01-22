<?php
    include "./conn/conn.php";
    session_start();

    session_destroy();

    $conn->close();

    echo "<script>window.location.href = 'log_in.php';</script>";
?>