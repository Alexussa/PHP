<?php

//VARIABLES

/* 
    - Prefix $
    - Start with a letter or underscore
    - Only Letters, numbers and underscores
    - Case sensitive
*/

// Data Types

/* 
    String
    Integers
    Floats 
    Boolean
    Arrays
    Objects
    NULL
    Resource
*/

    $output = 'hello world';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2;
    $greeting2 = "$string1 $string2";
    /*           ^                 ^ 
        putt double quotes to parse the strings
    */

    $string3 = 'They\'re here';

    $float1 = 4.4;
    $bool1 = true;

    define('GREETING', 'Hello Everyone');

    echo GREETING;




?>