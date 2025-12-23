<?php

class Abc {

    // Constructor
    public function __construct() {
        echo "Hello Amit<br>";
    }

    // Normal method
    public function hello() {
        echo "Hello everyone<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called<br>";
    }
}


$obj1 = new Abc();   

$obj1->hello();    


?>
