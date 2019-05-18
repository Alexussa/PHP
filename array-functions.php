<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

    $list = [354, 872, 99, 25, 253];

    //prints the maximum value in the array
    echo max($list) . "<br>";
    //prints the minimum value in the array
    echo min($list) . "<br>";
    //sorts the array from low to high and prints it
    sort($list);
    print_r($list);
    ?>

</body>
</html>