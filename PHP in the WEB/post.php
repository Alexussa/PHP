<?php

if(isset($_POST['submit'])) {
    echo $_POST['name'];
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
    <form action="post.php" method = "POST">
        <input type = "text" name = "name">
        <input type = "button" value = "Submit" name = "submit">
    </form>
</body>
</html>