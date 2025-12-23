<?php
/*
====================================================
PHP iterable – Easy Explanation
----------------------------------------------------
Definition:
iterable is a type hint that allows a function
to accept arrays or objects that can be looped
using foreach.
====================================================
*/

echo "<h2>PHP iterable Example</h2>";

/*
1. iterable with Array
----------------------------------------------------
This function accepts an array using iterable
and prints each item using foreach loop.
*/
function showItems(iterable $items) {
    foreach ($items as $item) {
        echo $item . "<br>";
    }
}

// Array data
$data = ["Amit", "Sunny", "SD"];
showItems($data);

echo "<hr>";

/*
2. iterable with Generator
----------------------------------------------------
A generator returns values one by one using yield.
Generators are also iterable.
*/
function numbers(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

// Loop through generator values
foreach (numbers() as $num) {
    echo $num . "<br>";
}

echo "<hr>";

/*

3. iterable as Return Type
----------------------------------------------------
A function can also return iterable data.
*/
function getNames(): iterable {
    return ["Amit", "Sunny", "SD"];
}

// Loop through returned iterable
foreach (getNames() as $name) {
    echo $name . "<br>";
}
?>
