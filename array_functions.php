<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions</title>
</head>
<body>
<?php

echo "<h1>PHP Array Functions Practice</h1>";

// ===============================
// 1. Remove element using array_splice()
// ===============================

echo "<h2>1. array_splice() – remove by index and re-index</h2>";

$name = array("amit", "sunny", "rahul");
echo "<b>Before splice:</b><br>";
var_dump($name);
echo "<br><br>";

echo "<b>After remove index 1 using array_splice:</b><br>";
array_splice($name, 1, 1);   // index 1 se 1 element remove
var_dump($name);
echo "<br><hr>";


// ===============================
// 2. Remove element using unset()
// ===============================

echo "<h2>2. unset() – remove without re-index</h2>";

$name = array("amit", "sunny", "rahul");
echo "<b>Before unset:</b><br>";
var_dump($name);
echo "<br><br>";

unset($name[1]); // index 1 remove hoga
echo "<b>After unset index 1:</b><br>";
var_dump($name);
echo "<br>";

echo "<p><i>Note: Index 1 remove hone ke baad bhi 0,2 waise hi rahenge. Array re-index nahi hota.</i></p>";
echo "<hr>";


// ===============================
// 3. array_pop() – remove last item
// ===============================

echo "<h2>3. array_pop() – remove last item</h2>";

$cars = array("Volvo", "BMW", "Toyota");
echo "<b>Before array_pop:</b><br>";
var_dump($cars);
echo "<br><br>";

$removed = array_pop($cars);
echo "<b>Removed item (last):</b> $removed <br>";
echo "<b>After array_pop:</b><br>";
var_dump($cars);
echo "<br><hr>";


// ===============================
// 4. array_shift() – remove first item
// ===============================

echo "<h2>4. array_shift() – remove first item</h2>";

$cars = array("Volvo", "BMW", "Toyota");
echo "<b>Before array_shift:</b><br>";
var_dump($cars);
echo "<br><br>";

$removedFirst = array_shift($cars);
echo "<b>Removed first item:</b> $removedFirst <br>";
echo "<b>After array_shift:</b><br>";
var_dump($cars);
echo "<br><hr>";


// ===============================
// 5. array_push() – add item(s) at end
// ===============================

echo "<h2>5. array_push() – add items at end</h2>";

$cars = array("Volvo", "BMW", "Toyota");
echo "<b>Original cars:</b><br>";
var_dump($cars);
echo "<br><br>";

echo "<b>After array_push (add Ford, Maybach, G-Wagon):</b><br>";
array_push($cars, "Ford", "Maybach", "G-Wagon");   // multiple items

// Directly add single item using [] syntax
$cars[] = "Audi";

var_dump($cars);
echo "<br><hr>";


// ===============================
// 6. array_push() with random indexes
// ===============================

echo "<h2>6. array_push() with random indexes</h2>";

$cars = array();
$cars[15] = "Volvo";
$cars[7]  = "BMW";
$cars[9]  = "Toyota";

echo "<b>Before array_push:</b><br>";
var_dump($cars);
echo "<br><br>";

array_push($cars, "Ford");  // yeh highest numeric index ke baad add karega
echo "<b>After array_push:</b><br>";
var_dump($cars);
echo "<br><hr>";


// ===============================
// 7. in_array() – check if a value exists
// ===============================

echo "<h2>7. in_array() – check if value exists in array</h2>";

$numbers = array(10, 20, 30, 40, 50);
echo "<b>numbers array:</b><br>";
var_dump($numbers);
echo "<br><br>";

if (in_array(30, $numbers)) {
    echo "30 is in the array<br>";
} else {
    echo "30 is NOT in the array<br>";
}

if (in_array(100, $numbers)) {
    echo "100 is in the array<br>";
} else {
    echo "100 is NOT in the array<br>";
}
echo "<hr>";


// ===============================
// 8. unset() on associative array
// ===============================

echo "<h2>8. unset() on associative array</h2>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo "<b>Before unset model:</b><br>";
var_dump($cars);
echo "<br><br>";

unset($cars["model"]);
echo "<b>After unset 'model' key:</b><br>";
var_dump($cars);
echo "<br><br>";

?>
</body>
</html>
