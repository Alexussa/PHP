<?php
    $connection = mysqli_connect('localhost', 'root', 'a31102002x', 'loginapp');

    if($connection) {
        echo "connected";
    } else {
        die("Database Connection FAILED");
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

?>


<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Read</h1>
           <?php

            while($row = mysqli_fetch_assoc($result)) {
                ?>

                <pre>

                    <?php 
                        print_r($row);
                    ?>
                    
                </pre>

                <?php
                
            }

            ?>
        </div>
    </div>
    <a href="login_create.php">Create</a><br>
    <a href="#">Read</a><br>
    <a href="login_update.php">Update</a><br>
    <a href="login_delete.php">Delete</a><br>
    <?php include "includes/footer.php";?>