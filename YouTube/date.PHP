<?php
    // echo date('d');  //Day
    // echo date('m');  //Month
    // echo date('y');  //Year
    // echo date('l');  //Day of the weak

    //echo date('d/m/Y');
    //echo date('d-m-y');

    // echo date('h:');  //Hour
    // echo date('i:');  //Minutes
    // echo date('s ');  //Seconds
    // echo date('a');  //AM or PM


    // Set time zone
    date_default_timezone_set('Asia/Jerusalem');


    //echo date('h:i:sa');

    $timestamp = mktime(11, 20, 00, 31, 10, 2002);

    //echo $timestamp;  <= will show the seconds that passed since that date/time 

    //echo date('d/m/Y', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    echo date('d/m/Y', $timestamp2);
    //echo $timestamp2;
?>