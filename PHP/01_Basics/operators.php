<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>

<?php
// -----------------------------
// 1. Arithmetic Operators
// -----------------------------
echo "<h3>Arithmetic Operators</h3>";

$x = 10;
$y = 6;

echo "Addition (x + y): " . ($x + $y) . "<br>";
echo "Subtraction (x - y): " . ($x - $y) . "<br>";
echo "Multiplication (x * y): " . ($x * $y) . "<br>";
echo "Division (x / y): " . ($x / $y) . "<br>";
echo "Modulus (x % y): " . ($x % $y) . "<br>";
echo "Exponentiation (x ** y): " . ($x ** $y) . "<br>";

echo "<hr>";


// -----------------------------
// 2. Assignment Operators
// -----------------------------
echo "<h3>Assignment Operators</h3>";

$x = 10;
$y = 6;

echo "Initial Value: x = $x, y = $y<br><br>";

// 1. = (Assign)
$x = 10;   // reset
$x = $y;
echo "x = y → $x<br>";

// 2. += (Addition Assignment)
$x = 10;   // reset
$x += $y;  // 10 + 6
echo "x += y → $x<br>";

// 3. -= (Subtraction Assignment)
$x = 10;   // reset
$x -= $y;  // 10 - 6
echo "x -= y → $x<br>";

// 4. *= (Multiplication Assignment)
$x = 10;   // reset
$x *= $y;  // 10 * 6
echo "x *= y → $x<br>";

// 5. /= (Division Assignment)
$x = 10;   // reset
$x /= $y;  // 10 / 6
echo "x /= y → $x<br>";

// 6. %= (Modulus Assignment)
$x = 10;   // reset
$x %= $y;  // 10 % 6
echo "x %= y → $x<br>";

// 7. .= (String Concatenation Assignment)
$text = "Hello";
$text .= " World";
echo "text .= ' World' → $text<br>";
echo "<hr>";

// -----------------------------
// 3. comparison Operators 
// -----------------------------
//  - return true OR false
echo "<h3>Comparison Operators</h3>";

$x = 10;
$y = 6;
echo "Initial Value: x = $x, y = $y<br><br>";

// Equal ==
var_dump($x == $y);
echo " → (x == y)<br><br>";

// Identical === same value or data type it true other while false
var_dump($x === $y);
echo " → (x ===y)<br><br>";

// Not Equal !=
var_dump($x != $y);
echo " → (x != y)<br><br>";

// Not Equal <>
var_dump($x <> $y);
echo " → (x <> y)<br><br>";

// Not Identical !==
var_dump($x !== $y);
echo " → (x !== y)<br><br>";

// Greater than >
var_dump($x > $y);
echo " → (x > y)<br><br>";

// Less than <
var_dump($x < $y);
echo " → (x < y)<br><br>";

// Greater or equal >=
var_dump($x >= $y);
echo " → (x >= y)<br><br>";

// Less or equal <=
var_dump($x <= $y);
echo " → (x <= y)<br><br>";

// Spaceship <=> 
/*1 → if left value is greater
0 → if values are equal
-1 → if left value is smaller*/
var_dump($x <=> $y);
echo " → (x <=> y)<br><br>";
echo "<hr>";

// -----------------------------
// 4. Increment/ decrement operators
// -----------------------------

echo "<h3>Increment / Decrement Operators</h3>";

//Intial value
$x = 10;
echo "Intial x = $x<br><br>";

// 1. pre increment 
echo "++x = " . ++$x ."(value become 11 print)  pre increment<br>";

//2. post increment 
echo "x++ = " . $x++ . " (print $x then value becomes " . $x . ") post increment <br>
<br>";


$x = 10;
echo "Intial x = $x<br>";

//pre dcrement
echo "--x = " . --$x ." pre dcrement $x<br>";

//post dcrement 
echo "x-- = " .$x-- ." post decrement $x<br>";

echo "<hr>";


// -----------------------------
// 5. Logical Operators 
// -----------------------------
echo "<h3>Logical Operators with Numeric Values</h3><br>";

$x = 10;
$y = 20;

//TRUE prints as 1
//FALSE prints as empty (blank)


echo "<b>AND Operator (&&)<b><br>";
$result = ($x > 5) && ($y < 2);  
echo "result = (x > 5) && (y > 2) → " . (int)$result . "<br><br>";
//TRUE && TRUE = TRUE (1)
//FALSE && TRUE = FALSE (0)
//TRUE && FALSE = FALSE (0)
//FALSE && FALSE = FALSE (0)


//OR OPERATORS
echo "<b>OR Operator (||)<b><br>";
$result = ($x > 9) || ($y < 2);
echo "result = (x > 12) || (y > 2) → " . (int)$result . "<br><br>";
// TRUE  || TRUE  = TRUE  (1)
// FALSE || TRUE  = TRUE  (1)
// TRUE  || FALSE = TRUE  (1)
// FALSE || FALSE = FALSE (0)

//NOT OPERSTORS
echo "<b>NOT Operator (!)</b><br>";
$result = !($x > 5);

echo "result = !(x > 5) → " . (int)$result . "<br>";

// (x > 5) is TRUE
// !TRUE = FALSE (0)
// !FALSE = TRUE (1)

?>



</body>
</html>
