<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>

<?php

echo "<h2>PHP Loops</h2>";
echo "Loops are used to repeat a block of code multiple times.<br><br>";
echo "PHP has four main types of loops:<b> while, do-while, for, foreach</b>.<br><br>";
echo "<hr>";

/* ------------------------------------------------------------------
   1. WHILE LOOP
------------------------------------------------------------------- */

echo "<h3>1. WHILE Loop</h3>";
echo "The <b>while</b> loop runs as long as the condition is TRUE.<br><br>";

echo "<b>Syntax:</b><br>";
echo "while (condition) { <br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "}<br><br>";

echo "<b>Example:</b><br>";

$i = 1;
while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
}

echo "<hr>";


/* ------------------------------------------------------------------
   2. DO...WHILE LOOP
------------------------------------------------------------------- */

echo "<h3>2. DO...WHILE Loop</h3>";
echo "The <b>do...while</b> loop runs the code at least once, even if the condition is FALSE.<br><br>";

echo "<b>Syntax:</b><br>";
echo "do { <br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "} while (condition);<br><br>";

echo "<b>Example:</b><br>";

$j = 1;
do {
    echo "Value: $j <br>";
    $j++;
} while ($j <= 5);

echo "<hr>";


/* ------------------------------------------------------------------
   3. FOR LOOP
------------------------------------------------------------------- */

echo "<h3>3. FOR Loop</h3>";
echo "The <b>for</b> loop is used when you know in advance how many times the loop should run.<br><br>";

echo "<b>Syntax:</b><br>";
echo "for (initialization; condition; increment) { <br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "}<br><br>";

echo "<b>Example:</b><br>";

for ($k = 1; $k <= 5; $k++) {
    echo "Count: $k <br>";
}

echo "<hr>";


/* ------------------------------------------------------------------
   4. FOREACH LOOP
------------------------------------------------------------------- */

echo "<h3>4. FOREACH Loop</h3>";
echo "The <b>foreach</b> loop is used to loop through an array.<br><br>";

echo "<b>Syntax:</b><br>";
echo "foreach (\$array as \$value) { <br>";
echo "&nbsp;&nbsp;&nbsp;// code to execute<br>";
echo "}<br><br>";

echo "<b>Example:</b><br>";

$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "$color <br>";
}

echo "<hr>";


/* ------------------------------------------------------------------
   5. BREAK & CONTINUE
------------------------------------------------------------------- */

echo "<h3>5. BREAK and CONTINUE</h3>";
echo "<b>break:</b> stops the loop immediately.<br>";
echo "<b>continue:</b> skips the current iteration.<br><br>";

// Break Example
echo "<b>Break Example:</b><br>";
for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        break;
    }
    echo "$x ";
}

echo "<br><br>";

// Continue Example
echo "<b>Continue Example:</b><br>";
for ($y = 1; $y <= 5; $y++) {
    if ($y == 3) {
        continue; 
    }
    echo "$y ";
}

echo "<hr>";

?>

</body>
</html>
