<?php
/*
PHP Class & Object Example

This example demonstrates:
- Class
- Object
- Properties
- Methods
*/

class Calculation {

    // Properties (variables)
    public $a, $b, $c;

    // Method for addition
    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    // Method for subtraction
    function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}


//Object 1
$c1 = new Calculation();
$c1->a = 40;
$c1->b = 30;

echo "<b>Sum of values (C1):</b> " . $c1->sum() . "<br>";


// Object 2
$c2 = new Calculation();
$c2->a = 29;
$c2->b = 21;

echo "<b>Subtraction of values (C2):</b> " . $c2->sub();
?>
