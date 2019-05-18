<?php
    //Array - Variable that holds multiple values

    /* 
        - Indexed
        - Associative
        - Multi-dimensional
    */

    //Indexed

    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 12, 57);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';
    
    //echo count($cars); <- to count the number of elements of an Array.
    //print_r($cars);
    //var_dump($cars);

    //echo $people[1];
    //echo $ids[1];
    //echo $cars[1];


    //Associative Array
    $people2 = ['Alex' => 27, 'Jose' => 32, 'William' => 42];
    echo $people2['Alex'];

    $people2['Jill'] = 42;
?>

