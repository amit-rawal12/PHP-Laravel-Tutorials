<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If Conditions</title>
</head>
<body>

<?php

/* ----------------------------------------------
   1. IF Statement
------------------------------------------------*/

echo "<h3>1. IF Statement</h3>";
echo "The <b>if statement</b> executes some code only if the condition is TRUE.<br><br>";

echo "Syntax:<br>";
echo "if (condition) {<br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "}<br><br>";

// Example
if (5 > 3) {
    echo "Have a good day!<br>";
}

$t = 14;
if ($t < 20) {
  echo "Have a good day again!";
}

echo "<hr>";


/* ----------------------------------------------
   2. IF–ELSE Statement
------------------------------------------------*/

echo "<h3>2. IF–ELSE Statement</h3>";
echo "The <b>if...else</b> statement runs one block of code if the condition is TRUE, otherwise it runs the ELSE block.<br><br>";

echo "Syntax:<br>";
echo "if (condition) {<br>";
echo "&nbsp;&nbsp;&nbsp;// code when TRUE;<br>";
echo "} else {<br>";
echo "&nbsp;&nbsp;&nbsp;// code when FALSE;<br>";
echo "}<br><br>";

// Example
$age = 20;
if ($age >= 18){
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}

echo "<br><br>";


// IF with Logical Operators
echo "<b>Logical Operators Example:</b><br>";
echo "Using <b>&&</b> (AND): both conditions must be TRUE.<br><br>";

if (5 == 5 && 3 < 7) {
    echo "Hello";
} else {
    echo "Goodbye";
}

echo "<br><hr>";


/* ----------------------------------------------
   3. IF – ELSEIF – ELSE
------------------------------------------------*/

echo "<h3>3. IF–ELSEIF–ELSE</h3>";
echo "Used when you have <b>multiple conditions</b> to check.<br><br>";

echo "Syntax:<br>";
echo "if (condition1){<br>";
echo "&nbsp;&nbsp;&nbsp;// code<br>";
echo "} elseif (condition2) {<br>";
echo "&nbsp;&nbsp;&nbsp;// code<br>";
echo "} else {<br>";
echo "&nbsp;&nbsp;&nbsp;// final code<br>";
echo "}<br><br>";

// Example
$marks = 72;

if ($marks >= 90) {
    echo "Grade A";
} elseif ($marks >= 75) {
    echo "Grade B";
} elseif ($marks >= 50) {
    echo "Grade C";
} else {
    echo "Fail";
}

echo "<br><hr>";


/* ----------------------------------------------
   4. Nested IF (IF inside IF)
------------------------------------------------*/

echo "<h3>4. Nested IF Statement</h3>";
echo "A <b>Nested IF</b> means one IF inside another IF.<br><br>";

echo "Syntax:<br>";
echo "if (condition1) {<br>";
echo "&nbsp;&nbsp;&nbsp;if (condition2) {<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// both conditions TRUE<br>";
echo "&nbsp;&nbsp;&nbsp;} else {<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// condition2 FALSE<br>";
echo "&nbsp;&nbsp;&nbsp;}<br>";
echo "} else {<br>";
echo "&nbsp;&nbsp;&nbsp;// condition1 FALSE<br>";
echo "}<br><br>";

// Example
$age = 20;
$citizen = true;

if ($age >= 18) {
    if ($citizen) {
        echo "Eligible to Vote";
    } else {
        echo "Age OK but not a citizen";
    }
} else {
    echo "Not eligible due to age";
}

echo "<hr>";


/* ----------------------------------------------
   5. Constant Example
------------------------------------------------*/

define("test", 50);
echo "<h3>5. Constant Example</h3>";
echo "Constant value: " . test;

?>

</body>
</html>
