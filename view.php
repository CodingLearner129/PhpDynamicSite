<?php
    include "header.php";
    include "./conn/conn.php";
    session_start();

    $query = "SELECT * FROM `userinfodata`";
    $sql = "SELECT * FROM `usersign`";

    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);
    $resultSql = $conn-> query($sql);
?>
    <div class="jumbotron">
        <h1>Dhgp :) </h1>
        <p>We are The Web Developer.</p>
        <div class="dropdown" id="username">
        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
            <?php 
                if($_GET['id']){
                    $getId = $_GET['id'];
                    $sqlQuery = "SELECT `username` FROM `usersign` WHERE `id`='$getId'";
                    $resultSqlQuery = $conn->query($sqlQuery);
                    if($resultSqlQuery == TRUE){
                        if($resultSqlQuery->num_rows > 0){
                            while($rowSqlQuery = $resultSqlQuery->fetch_assoc()){
                                $_SESSION['username'] = $rowSqlQuery['username'];
                                echo $_SESSION['username'];
                            }
                        }
                    } 
                } else{
                    session_destroy();
                    echo "<script>window.location.href = 'log_in.php';</script>";
                }
            ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="log_out.php"><button type="button" class="btn btn-outline-danger ml-auto">Log Out</button></a></li>
        </ul>
        </div>
    </div>
    <!-- View Start -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">View Page</h2>
        </div>
        <div class="container-fluid h-10">
            <h4 class="text-center pb-4"><u>View Contacts</u></h4>
            <div class="overflow-auto">
                <table class="table">
                    <thead class="bg-dark text-warning">
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Mobile</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <!-- <td><?php //echo $row['id'] ?></td> -->
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><?php echo $row['comment'] ?></td>
                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid pt-5">
            <h4 class="text-center pb-4"><u>View Users</u></h4>
            <div class="overflow-auto">
                <table class="table">
                    <thead class="bg-dark text-warning">
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Mobile</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultSql->num_rows > 0){
                                while($rowSql = $resultSql->fetch_assoc()){
                        ?>
                        <tr>
                            <!-- <td><?php //echo $rowSql['id'] ?></td> -->
                            <td><?php echo $rowSql['username'] ?></td>
                            <td><?php echo $rowSql['email'] ?></td>
                            <td><?php echo $rowSql['mobile'] ?></td>
                            <td><?php echo $rowSql['password'] ?></td>
                            <td><a class="btn btn-info" href="update_sql.php?id=<?php echo $rowSql['id'];?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="delete_sql.php?id=<?php echo $rowSql['id'];?>">Delete</a></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- View End -->
<?php
    $conn->close();
    include "footer.php";
?>