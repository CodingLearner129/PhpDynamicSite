<?php
    include "./conn/conn.php";

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $comment = $_POST["comment"];

        $query = "INSERT INTO `userinfodata` (`name`, `email`, `mobile`, `comment`) VALUES('$name', '$email', '$mobile','$comment')";

        // mysqli_query($conn, $query);
        
        $result = mysqli_query($conn, $query);
        if($result == TRUE){
            ?>
            <script> alert('Submited successfully...'); </script>;
            <script> window.location.href = 'index.php'; </script>
            <?php
        } else{
            echo "<script> alert('Submission failed!!!'); window.location.href = 'contact.php';</script>";
        }
    }
    $conn->close();
    // header("location: index.php");
?>