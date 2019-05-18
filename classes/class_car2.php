<?php

class Car {

    function moveWheels() {
        echo "wheels move";
    }

}

if(method_exists("Car", "moveWheels")) {
    echo "it works";
} else {
    echo "not working";
}
?>