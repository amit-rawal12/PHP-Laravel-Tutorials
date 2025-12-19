<?php
/*
====================================================
PHP Interface Example (Multiple Inheritance)
1.PHP multiple inheritance allow nahi karta (class to class)
2.BUT 👉 multiple interfaces implement kar sakte ho
*/




// Interface 1
interface Parent1 {
    public function cal($a, $b);
}

// Interface 2
interface Parent2 {
    public function sub($c, $d);
}

// Child class implements multiple interfaces
class ChildClass implements Parent1, Parent2 {

    // Addition method
    public function cal($a, $b) {
        echo "Addition: " . ($a + $b) . "<br>";
    }

    // Subtraction method
    public function sub($c, $d) {
        echo "Subtraction: " . ($c - $d) . "<br>";
    }
}

// Object creation
$test = new ChildClass();
$test->cal(45, 45);
$test->sub(50, 20);

?>
