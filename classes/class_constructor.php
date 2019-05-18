<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels() {
        $this -> wheels = 10;
    }

    function createDoors() {
        $this -> doors = 6;
    }

    function __construct() {
        echo $this -> wheels = 10;
    }

}

$bmw = new Car();

/* if(class_exists("Plane")) {
    echo "hello world";
} else {
    echo "doesn't exists";
} */
?>