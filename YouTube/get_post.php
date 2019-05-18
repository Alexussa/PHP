<?php
    if(isset($_GET['name'])) {
        echo htmlentities($_GET['name']);
        //print_r($_GET);
    }
    
    /*
    if(isset($_POST['name'])) {
        echo htmlentities($_POST['name']);
        print_r($_POST);
        $name = htmlentities($_POST['name']); //the data that transfered  does not seen in the URL
        echo $name;
    }
    

    if(isset($_REQUEST['name'])) {
        //echo htmlentities($_REQUEST['name']);
        //print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']); //the data that transfered  does not seen in the URL
        echo $name;
    }
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <form method = "POST" action = "get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name= "name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name= "email">
        </div>
        <br>
        <input type="submit" value = "Submit">
    </form>
    <ul>
        <li><a href="get_post.php?name=Alex">Alex</a></li>
    </ul>
    <ul>
        <li><a href="get_post.php?name=Steve">Steve</a></li>
    </ul>
</body>
</html>