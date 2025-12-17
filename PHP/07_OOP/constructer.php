<?php

// Creating a class named Person
class Person {

    // Public properties (variables of the class)
    public $name;   
    public $age;   

    // Constructor function
    // This function runs automatically when object is created
    function __construct($name = "No Name", $age = 0) {

        // Assign passed value to class property
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display name and age
    function show() {

        // $this refers to current object
        // Printing name and age
        echo $this->name . " - " . $this->age . "<br>";
    }
}

// Creating objects of Person class
$p1 = new Person("Amit Rawal", 22);
$p2 = new Person("Sunny Yadav", 20);

// Calling show() method using object
$p1->show();   
$p2->show();  

?>
