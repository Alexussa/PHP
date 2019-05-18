<?php include "db.php";?>
<?php include "functions.php";?>
<?php createRows();?>

<?php include "includes/header.php";?>
<div class="container">
    <div class="col-sm-6">
       <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="CREATE"><br>
                <a href="#">Create</a><br>
                <a href="login_read.php">Read</a><br>
                <a href="login_update.php">Update</a><br>
                <a href="login_delete.php">Delete</a><br>
            
        </form>
    </div>
</div>
<?php include "includes/footer.php";?>