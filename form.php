<?php
//checks if the button was clicked
if(isset($_POST['submit'])) {
    $names = ["alex" ,"peter", "jane", "maria"];
    $minimum = 3;
    $maximum  = 10;

    //gets the username with the post method
    $username = $_POST['username'];
    //gets the password with the post method
    $password = $_POST['password'];

    //checks if the username's length is longer than 3
    if(strlen($username) < $minimum) {
        echo "username no long enough";
    }
    //checks if the username's length is shorter than 10
    if(strlen($username) > $maximum) {
        echo "the username is to long";
    }
}

//checks if the username is not in the names array
if(!in_array($username, $names)) {
    echo "sorry you not allowed"
} 
else {
    echo "welcome!!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method = "post">
    
        <input type="text" name = "username" placeholder = "Enter Username">
        <input type="password" name = "password" placeholder = "Enter Password"><br>
        <input type="submit" name = "submit">
    
    </form>
</body>
</html>