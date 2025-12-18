<?php

// ---------- Parent Class ----------
class Base {

    // Parent class property
    public $name = "Parent Class";

    // Parent class method
    public function cal($a, $b) {
        return $a * $b;   // multiplication
    }
}


// ---------- Child Class ----------
class Derived extends Base {

    // Child class property (overrides parent property)
    public $name = "Derived Class";

    // Uncomment below to override parent method
    public function cal($a, $b) {
        return $a + $b;   // addition
    }
    
}


// ---------- Object Creation ----------
$test = new Derived();

// ---------- Method Call ----------
echo $test->cal(10, 45);   // Output: 450 (if override is commented)

?>
