<?php
    include "header.php";
    include "./conn/conn.php";

    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $comment = $_POST["comment"];

        $query = "UPDATE `userinfodata` SET `user`='$name', `email`='$email', `mobile`='$mobile', `comment`='$comment' WHERE `id`='$user_id'";

        $result = $conn->query($query);

        if($result == TRUE){
            echo "<script> alert('Updated successfully...'); window.location.href='view.php'; </script>";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        // header("location:view.php");
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM `userinfodata` WHERE `id`='$id'";

        $result = $conn->query($query);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $id = $row["id"];
                $name = $row["name"];
                $email = $row["email"];
                $mobile = $row["mobile"];
                $comment = $row["comment"];
            }
        ?>
        <div class="jumbotron">
            <h1>Dhgp :) </h1>
            <p>We are The Web Developer.</p>
        </div>
        <!-- Update Form Start -->
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Contact Update Form</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" autocomplete="off" class="form-control" value="<?php echo $id; ?>"  required >
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" autocomplete="off" class="form-control" value="<?php echo $name; ?>" required >
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" class="form-control" value="<?php echo $email; ?>" required >
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile" pattern="[789]{1}[0-9]{9}" autocomplete="off" class="form-control" title="Phone number with 7-9 and remaing 9 digit with 0-9" value="<?php echo $mobile; ?>" required >
                    </div>
                    <!-- <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" class="form-control" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                    </div> -->
                    <!-- value="<?php //echo $comment; ?>" -->
                    <div class="form-group">
                        <label for="comment">Comments</label>
                        <textarea class="form-control" name="comment" id="comment" cols="10" rows="10"><?php echo $comment; ?></textarea>
                    </div>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                    <button type="button" name="cancel" onclick="window.location='view.php';" class="btn btn-danger">Cancel</button>
                    <!-- <button type="button" name="cancel" onclick="javascript:window.location='view.php';" class="btn btn-danger">Cancel</button> -->
                </form>
            </div>
        </section>    
        <!-- Update Form End -->
        <?php
        } else{
            // If the 'id' value is not valid, redirect the user back to view.php page
            header("location:view.php");
        }
    }
?>
<?php
    $conn->close();
    include "footer.php";
?>