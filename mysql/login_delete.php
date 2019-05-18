<?php include "db.php";?>
<?php include "functions.php";?>

<?php

if(isset($_POST['submit'])) {
    deleteRows();
}

?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
            <form action="login_delete.php" method = "post">
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>

                <input class = "btn btn-primary" type="submit" name = "submit" value="DELETE"><br>
                <a href="login_create.php">Create</a><br>
                <a href="login_read.php">Read</a><br>
                <a href="login_update.php">Update</a><br>
                <a href="#">Delete</a>
            </form>
        </div>
    </div>
    <?php include "includes/footer.php";?>
