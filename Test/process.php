<?php

if(isset($_POST['submit'])) {

    $connection = mysqli_connect('localhost', 'root', 'a31102002x', 'image_gallery');  
    if(!$connection) {
        die("Database connection failed " . mysqli_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    
    $result = mysqli_query($connection, $query);

    if($result) {
        echo $result;
    } else {
        echo $result . mysqli_error();
    }
}
    
    
    ?>