<?php

// ---------------- ABSTRACT PARENT CLASS ----------------
abstract class Base {

    // Public property
    public $name;

    // Abstract method
    // Only declaration, no body
    abstract protected function cal($a, $b);
}


// ---------------- CHILD CLASS ----------------
class Derived extends Base {

    // Must implement abstract method
    // Access level must be SAME or MORE visible (protected → public)
    public function cal($c, $d) {

        echo "Hello World<br>";

        // Method logic
        echo $c + $d;
    }
}


// ---------------- OBJECT CREATION ----------------
// Abstract class ka object nahi ban sakta
$test = new Derived();

// ---------------- METHOD CALL ----------------
$test->cal(56, 56);   // Output: Hello World 112

?>
