<?php
/*A static method is a method that belongs to the class, not to an object.
It can be called without creating an object.*/

//simple example


class MathOperations {

    // Static method
    public static function add($a, $b) {
        return $a + $b;
    }
}

// Calling static method (no object needed)
echo MathOperations::add(10, 20);
echo "<br>";


// Static Method with Static Property

class Counter {

    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}

Counter::increment();
Counter::increment();

echo Counter::$count;


?>
