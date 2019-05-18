<?php include "db.php";?>
<?php include "functions.php";?>

<?php

if(isset($_POST['submit'])) {
    updateTable();
}

?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
            <form action="login_update.php" method = "post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input id = "username" name = "username" type="text" class = "form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id = "password" name = "password" type="password" class = "form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>

                <input class = "btn btn-primary" type="submit" name = "submit" value="UPDATE"><br>
                <a href="login_create.php">Create</a><br>
                <a href="login_read.php">Read</a><br>
                <a href="#">Update</a><br>
                <a href="login_delete.php">Delete</a><br>
            </form>
        </div>
    </div>
    <?php include "includes/footer.php";?>