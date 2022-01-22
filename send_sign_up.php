<?php
    include "./conn/conn.php";

    if(isset($_POST["signup"])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $query = "INSERT INTO `usersign` (`username`, `email`, `mobile`, `password`) VALUES('$username', '$email', '$mobile', '$password')";

        $result = mysqli_query($conn, $query);
        if($result == TRUE){
            ?>
            <script> alert('Sign up successfully...'); </script>;
            <script> window.location.href = 'log_in.php'; </script>";
            <?php
        } else{
            echo "<script> alert('Sign up failed!!!'); window.location.href = 'sign_up.php';</script>";
        }
    }
    $conn->close();
    // header("location:log_in.php");
?>