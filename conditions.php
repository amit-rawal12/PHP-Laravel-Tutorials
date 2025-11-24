<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//1. if condition
echo "if statement - executes some code if the condition is true<br><br>";
// Syntax example
echo "Syntax:<br>";
echo "if (condition) {<br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "}<br><br>";

// Example
if (5 > 3) {
    echo "Have a good day!<br>";
}

//We can also use variables in the if statement:
$t = 14;
if ($t < 20) {
  echo "Have a good day!";
}
echo "<hr>";


//2. if-else condition
echo "The if...else statement executes some code if a condition is true and another code if that condition is false.<br><br>";

// Syntax example
echo "Syntax:<br>";
echo "if (condition) {<br>";
echo "&nbsp;&nbsp;&nbsp;// code to be executed if condition is true;<br>";
echo "} else { <br>";
echo "&nbsp;&nbsp;&nbsp;  // code to be executed if condition is false;<br>";
echo "}<br><br>";

//Example
$age = 20;
if ($age >= 18){
    echo "you are eligible to vote";
} else {
    echo "you are not eligible to vote";
}
echo "<br><br>";

//2.if logical opetrators
//if both condition is true return hello. 
// if one condition in false print good bye
if (5 == 5 && 3 < 7) {
  echo "Hello";
} else {
  echo "Good bye";
}
echo "<br><br><hr>";



//3. IF -ESLE _IF

echo "The if...elseif...else statement executes different codes for more than two conditions<br><br>";

//syntax
echo "Syntax:<br>";
echo "if (condition){<br>";
echo "&nbsp;&nbsp;&nbsp;// code to be executed if condition is true;<br>";
echo "} elseif (condition) {";
echo "&nbsp;&nbsp;&nbsp;// code to be executed if first condition is false and this condition is true;<br>";
echo "}else {";
echo "&nbsp;&nbsp;&nbsp;// code to be executed if  all condition is false;<br>";
echo "}<br><br>";

//example

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
echo "<br><br><hr>";


// 4. Nested IF
echo "<b>4. Nested If Example:</b><br><br>";




echo "if (condition1) { <br>";
echo "&nbsp;&nbsp;&nbsp; // Code runs if condition1 is TRUE;<br>";
echo "if (condition2) {<br>";
echo "&nbsp;&nbsp;&nbsp;// Code runs if BOTH condition1 AND condition2 are TRUE;<br>";
echo "} else { <br>";
echo "&nbsp;&nbsp;&nbsp; // Condition2 is FALSE;<br>";
echo "} <br>";
echo "} else { <br>";
echo "&nbsp;&nbsp;&nbsp; //Condition1 is FALSE;<br>";
echo "} <br><br>";


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





?>
</body>
</html>
