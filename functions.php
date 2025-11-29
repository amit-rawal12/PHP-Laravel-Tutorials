<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>

<?php

echo "<h2>PHP Functions</h2>";

echo "A <b>function</b> is a block of code that performs a specific task.<br>";
echo "Functions make code <b>reusable, cleaner, and easier to maintain</b>.<br><br>";

echo "PHP has two types of functions:<br>";
echo "1. Built-in Functions<br>";
echo "2. User-Defined Functions<br><br>";
echo "<hr>";


/* --------------------------------------------------------------
   1. USER-DEFINED FUNCTION
-------------------------------------------------------------- */

echo "<h3>1. User-Defined Function</h3>";
echo "A function created by the user to perform a task.<br><br>";

echo "<b>Syntax:</b><br>";
echo "function functionName() { <br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "}<br><br>";

echo "<b>Example:</b><br>";

function welcome() {
    echo "Hello! Welcome to PHP Functions.<br>";
}

welcome();

echo "<hr>";


/* --------------------------------------------------------------
   2. FUNCTION WITH PARAMETERS
-------------------------------------------------------------- */

echo "<h3>2. Function with Parameters</h3>";
echo "Parameters allow you to pass data inside a function.<br><br>";

echo "<b>Syntax:</b><br>";
echo "function functionName(\$param) { <br>";
echo "&nbsp;&nbsp;&nbsp;// code<br>";
echo "}<br><br>";

echo "<b>Example:</b><br>";

function greet($name) {
    echo "Hello, $name!<br>";
}

greet("Amit");
greet("Ravi");

echo "<hr>";


/* --------------------------------------------------------------
   3. FUNCTION WITH MULTIPLE PARAMETERS
-------------------------------------------------------------- */

echo "<h3>3. Function with Multiple Parameters</h3>";

function addNumbers($a, $b) {
    echo "Addition: " . ($a + $b) . "<br>";
}

addNumbers(5, 10);

echo "<hr>";


/* --------------------------------------------------------------
   4. FUNCTION WITH RETURN VALUE
-------------------------------------------------------------- */

echo "<h3>4. Function with Return Value</h3>";

echo "The <b>return</b> statement sends a value back to the caller.<br><br>";

function square($num) {
    return $num * $num;
}

echo "Square of 6 is: " . square(6) . "<br>";

echo "<hr>";


/* --------------------------------------------------------------
   5. DEFAULT ARGUMENT
-------------------------------------------------------------- */

echo "<h3>5. Default Argument in Function</h3>";

function greetUser($name = "Guest") {
    echo "Hello, $name!<br>";
}

greetUser("Amit");
greetUser(); // uses default value

echo "<hr>";


/* --------------------------------------------------------------
   6. TYPE DECLARATION (PHP 7+)
-------------------------------------------------------------- */

echo "<h3>6. Function with Type Declaration</h3>";

function multiply(int $x, int $y): int {
    return $x * $y;
}

echo "Multiplication: " . multiply(4, 5) . "<br>";

echo "<hr>";


/* --------------------------------------------------------------
   7. RETURNING MULTIPLE VALUES
-------------------------------------------------------------- */

echo "<h3>7. Returning Multiple Values</h3>";

function getUserData() {
    return ["Amit", 25, "India"];
}

list($name, $age, $country) = getUserData();

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Country: $country <br>";

echo "<hr>";


/* --------------------------------------------------------------
   8. ANONYMOUS FUNCTION (Closure)
-------------------------------------------------------------- */

echo "<h3>8. Anonymous Function (Closure)</h3>";

$welcomeMessage = function($person) {
    echo "Welcome, $person!<br>";
};

$welcomeMessage("Amit");

echo "<hr>";


/* --------------------------------------------------------------
   9. RECURSIVE FUNCTION
-------------------------------------------------------------- */

echo "<h3>9. Recursive Function</h3>";

function countdown($n) {
    if ($n <= 0) return;
    echo $n . "<br>";
    countdown($n - 1);
}

countdown(5);

echo "<hr>";

?>

</body>
</html>
