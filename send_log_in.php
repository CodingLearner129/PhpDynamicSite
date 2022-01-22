<?php
    include "./conn/conn.php";
    session_start();

    if(isset($_POST["login"])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `usersign` WHERE `email`='$email' && `password`='$password'";

        $resultSql = mysqli_query($conn, $sql);
        
        if($resultSql == TRUE){
            if($resultSql->num_rows > 0){
                while($rowSql = $resultSql->fetch_assoc()){
                    $dbPass = $rowSql["password"];
                    // echo $dbPass;
                    $_SESSION['id'] = $rowSql['id'];

                    // $pass_Decode = password_verify($password, $dbPass);

                    // if($pass_Decode){
                    if($password == $dbPass){
                        ?>
                        <script> alert('Log in successfully...'); </script>;
                        <script> window.location.href = 'view.php?id=<?php echo $_SESSION['id'];?>'; </script>";
                        <?php
                    } else{
                        echo "<script> alert('Invalid Password!!!'); window.location.href = 'log_in.php'; </script>";
                    }
                }
            } else{
                echo "<script> alert('Sign up first!!!'); window.location.href = 'sign_up.php'; </script>";
            }
        } else{
            echo "<script> alert('Log in failed!!!'); window.location.href = 'log_in.php'; </script>";
        }
    }
    $conn->close();
    // header("location:view.php");
?>