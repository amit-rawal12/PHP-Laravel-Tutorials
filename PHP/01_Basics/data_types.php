<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>

<h1>PHP Data Types Example</h1>

<?php

// 1️⃣ STRING
// ------------------------------
// A string stores text within quotes.
//$name = is a varible, its container you can stored diff type of data

$name = "Amit Rawal";  
echo "String (name): $name <br><br>";



// 2️⃣ INTEGER
// ------------------------------
// Integer stores whole number values (no decimal).
$age = 22; 
echo "Integer (age): $age <br><br>";



// 3️⃣ FLOAT / DOUBLE
// ------------------------------
// Float stores decimal values.
$price = 50.60;  
echo "Float (price): $price <br><br>";



// 4️⃣ BOOLEAN
// ------------------------------
// Boolean gives TRUE or FALSE values.
// TRUE = 1 (printed as 1)
// FALSE = (prints nothing)
$isLogin = true;  
echo "Boolean (isLogin): $isLogin <br><br>";


// 5️⃣ ARRAY
// ------------------------------
// Array stores multiple values inside [].
$array = ["amit", "SD", "sunny"];

// var_dump() shows data type + length + full detail.
echo "Array (full details using var_dump): <br>";
var_dump($array);

echo "<br><br>";


// 6️⃣ NULL
// ------------------------------
// Null represents an empty variable (no value).
$data = NULL;
echo "NULL value: ";
var_dump($data);

?>

</body>
</html>
