<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Case</title>
</head>
<body>

<?php

// ---------------------------------------------
// 1. Definition Section
// ---------------------------------------------

echo "<h2>PHP Switch Case</h2>";

echo "1. The <b>switch case</b> in PHP is used to compare <b>one variable</b> with <b>multiple values</b>.<br>
It is cleaner and easier than writing many <b>if...elseif</b> statements.<br><br>";

echo "2. When PHP reaches a <b>break</b> statement, it stops the switch and exits the block.<br><br>";

echo "3. The <b>default</b> keyword runs when no case matches the value of the variable.<br><br>";


// ---------------------------------------------
// 2. Example 1
// ---------------------------------------------

echo "<h3>Example 1:</h3>";

$day = "Friday";

switch($day){
    case "Monday":
        echo "Start of the week!";
        break;

    case "Friday":
        echo "Weekend is near!";
        break;

    case "Sunday":
        echo "Holiday!";
        break;

    default:
        echo "Just another day.";
}

echo "<hr>";


// ---------------------------------------------
// 3. Example 2 – Number-Based Switch
// ---------------------------------------------

echo "<h3>Example 2:</h3>";

$number = 3;

switch($number){
    case 1:
        echo "You selected number ONE";
        break;

    case 2:
        echo "You selected number TWO";
        break;

    case 3:
        echo "You selected number THREE";
        break;

    default:
        echo "Invalid number selected";
}

echo "<hr>";

?>

</body>
</html>
