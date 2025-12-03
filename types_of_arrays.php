<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays Practice</title>
</head>
<body>
<?php

// ===============================
// 1. Indexed Array (Normal Array)
// ===============================

echo "<h2>1. Indexed Array (Normal Array)</h2>";

// Create an indexed array
$names = array("amit", "sunny", "rahul");

// Debug: show full structure
echo "<b>var_dump of \$names:</b><br>";
var_dump($names);
echo "<br><br>";

// Count how many items are in the array
echo "<b>Count of \$names array:</b> " . count($names) . "<br><br>";

// Access items using index
echo "<b>Access using index:</b><br>";
echo "Index 0: " . $names[0] . "<br>";
echo "Index 1: " . $names[1] . "<br>";
echo "Index 2: " . $names[2] . "<br><br>";

// Change a value in the array
echo "<b>Change value at index 1:</b><br>";
$names[1] = "sandeep";
var_dump($names);
echo "<br><br>";

// Looping through indexed array with foreach
echo "<b>Looping with foreach:</b><br>";
foreach ($names as $name) {
    echo $name . "<br>";
}
echo "<hr>";


// ===============================
// 2. More Indexed Array Examples
// ===============================

echo "<h2>2. More Indexed Array Examples</h2>";

// Simple cars array
$cars = array("Volvo", "BMW", "Toyota");

echo "<b>Original cars array:</b><br>";
var_dump($cars);
echo "<br><br>";

// Change value using index
echo "<b>Change cars[1] to Audi:</b><br>";
$cars[1] = "Audi";
var_dump($cars);
echo "<br><br>";

// Loop through cars using foreach
echo "<b>Looping cars:</b><br>";
foreach ($cars as $car) {
    echo $car . "<br>";
}
echo "<br>";

// Add new items (normal sequential index)
echo "<b>Add new item using array_push (sequential index):</b><br>";
$cars = array("Volvo", "BMW", "Toyota");
array_push($cars, "Ford");   // adds at next index (3)
var_dump($cars);
echo "<br><br>";

// Add new items with random indexes
echo "<b>Add items with random indexes:</b><br>";
$cars = array();
$cars[15] = "Volvo";
$cars[7]  = "BMW";
$cars[9]  = "Toyota";

echo "Before array_push:<br>";
var_dump($cars);
echo "<br><br>";

array_push($cars, "Ford");  // yeh highest numeric index ke baad add karega
echo "After array_push:<br>";
var_dump($cars);
echo "<br><hr>";


// ===============================
// 3. Associative Array (Key => Value)
// ===============================

echo "<h2>3. Associative Array (Key => Value)</h2>";

echo "Associative arrays are arrays that use <b>named keys</b> that you assign to them.<br><br>";

// Create associative array
$car = array(
    "brand" => "Ford",
    "model" => "Mustang",
    "year"  => 1964
);

echo "<b>Original \$car array:</b><br>";
var_dump($car);
echo "<br><br>";

// Access values using key
echo "<b>Access using key:</b><br>";
echo "Brand: " . $car["brand"] . "<br>";
echo "Model: " . $car["model"] . "<br>";
echo "Year: "  . $car["year"]  . "<br><br>";

// Change value in associative array
echo "<b>Change year to 2024:</b><br>";
$car["year"] = 2024;
var_dump($car);
echo "<br><br>";

// Add new key-value pair
echo "<b>Add new key 'color':</b><br>";
$car["color"] = "Red";
var_dump($car);
echo "<br><br>";

// Looping through associative array
echo "<b>Looping through associative array (key => value):</b><br>";
foreach ($car as $key => $value) {
    echo "$key : $value <br>";
}
echo "<hr>";


// ===============================
// 4. Multidimensional Array
// ===============================

echo "<h2>4. Multidimensional Array (Array inside Array)</h2>";

// Example: list of students
$students = array(
    array("name" => "Amit",  "age" => 22, "city" => "Umbergaon"),
    array("name" => "Sunny", "age" => 24, "city" => "Surat"),
    array("name" => "Rahul", "age" => 23, "city" => "Mumbai"),
);

echo "<b>All students (var_dump):</b><br>";
var_dump($students);
echo "<br><br>";

// Display nicely using loop
echo "<b>Looping students:</b><br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", City: " . $student["city"] . "<br>";
}
echo "<hr>";


// ===============================
// 5. Some Useful Array Functions
// ===============================

echo "<h2>5. Some Useful Array Functions</h2>";

$numbers = array(10, 20, 30, 40, 50);

echo "<b>numbers array:</b><br>";
var_dump($numbers);
echo "<br><br>";

// array_push
echo "<b>array_push (add at end):</b><br>";
array_push($numbers, 60);
var_dump($numbers);
echo "<br><br>";

// array_pop
echo "<b>array_pop (remove last item):</b><br>";
$last = array_pop($numbers);
echo "Popped value: $last <br>";
var_dump($numbers);
echo "<br><br>";

// in_array
echo "<b>in_array (check if value exists):</b><br>";
if (in_array(30, $numbers)) {
    echo "30 is in the array<br>";
} else {
    echo "30 is NOT in the array<br>";
}
echo "<br>";

// unset
echo "<b>unset (remove item by index):</b><br>";
unset($numbers[1]); // remove index 1
var_dump($numbers);
echo "<br><br>";

?>
</body>
</html>
