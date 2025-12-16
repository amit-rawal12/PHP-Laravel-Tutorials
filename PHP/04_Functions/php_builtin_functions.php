<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 & SHA1 in PHP</title>
</head>
<body>

<?php
/*
====================================================
Message Digest Algorithms (MD5 & SHA1)
----------------------------------------------------
Definition:
Message Digest algorithms are used to convert 
a string into a fixed-length hashed value.
These are mainly used for password encryption 
and data security.
====================================================
*/

echo "<h2>1. MD5 & SHA1 Hashing Example</h2>";

// Original string
$str = "hello";
echo "<b>Original String:</b> " . $str . "<br><br>";

/*
-------------------------
MD5 (Message Digest 5)
-------------------------
MD5 converts data into a 32-character hash value.
It is a one-way encryption (cannot be reversed).
*/

// 32-character hexadecimal string
echo "<b>MD5 Hexadecimal:</b> " . md5($str) . "<br>";

// Returns raw binary data (16 bytes)
echo "<b>MD5 Binary:</b> " . md5($str, true) . "<br><br>";

/*
-------------------------
SHA1 (Secure Hash Algorithm)
-------------------------
SHA1 converts data into a 40-character hash value.
More secure than MD5 (but now also considered weak).
*/

// SHA1 Hexadecimal output
echo "<b>SHA1 Hexadecimal: </b> " . sha1($str) . "<br>";

// SHA1 Binary output
echo "<b>SHA1 Binary: </b> " . sha1($str, true) . "<br>";



// 2. convert_uuencode() / convert_uudecode() Example

echo "<h2>2. convert_uuencode() / convert_uudecode() Example</h2>";

// Original string
$str = "Hello world";
echo "<b>Original String:</b> " . $str . "<br><br>";

//convert_uuencode() converts a string
// into encoded ASCII text.
$encodedString = convert_uuencode($str);
echo "<b>Encoded String:</b> " . $encodedString . "<br><br>";

// convert_uudecode() converts encoded data
// back to the original string.
echo "<b> decode string: </b>". convert_uudecode($encodedString);



//3. bin2hex() & hex2bin() functions
echo "<h2>3. bin2hex() & hex2bin() functions Example</h2>";

//convert ASCII char to hexadecimal value  (used  for secure msg string)
$str = "hello world";
echo "<b>Original String:</b> " . $str . "<br><br>";

//bin2hex() - Converts ASCII  hexadecimal
$hexString = bin2hex($str);
echo "<b>Hexadecimal Value:</b> " . $hexString . "<br><br>";

//hex2bin() - hexadecimal to original form
$originalString = hex2bin($hexString);
echo "<b>Converted Back String:</b> " . $originalString . "<br>";



//4. chr() & ord() Example 
echo "<h2>4. chr() & ord() functions Example</h2>";

//convert ASCII value to char
$char = chr(66);   // ASCII value 66 = 'B'
echo "<b>ASCII to Character:</b> " . $char . "<br><br>";

// ASCII value for first charracters
$ascii = ord("Hello");   // Takes first character 'H'
echo "<b>Character to ASCII:</b> " . $ascii . "<br>";



// 5.strip_tags & wordwrap Example 
echo "<h2>5. strip_tags() & wordwrap() functions Example</h2>";

$str = "Hello <b>world</b>, hello <i>world</i>";
echo "Original String: ". $str. "<br>";

//Removes HTML and PHP tags from a string.
echo "<b>After strip_tags(): </b> " . strip_tags($str) . "<br><br>";

//wrap a string give sequence of char / numer of character
$str = "this world is beautifull";
echo "<b>After wordwrap(): </b>" .wordwrap($str, 4, "<br>")."<br>";



// 6. abs() , ceil(), floor(), & round() example
echo "<h2>6. abs() & ceil(), floor(), & round() functions Example</h2>";

//Returns the absolute (positive) value of a number.
$num = -10.7;
echo "<b>Original Number:</b> " . $num . "<br>";
echo "<b>abs():</b> " . abs($num) . "<br><br>";

// number UP/above to the nearest integer.
$num = 4.3;
echo "<b>ceil(4.3):</b> " . ceil($num) . "<br>";

//number DOWN to the nearest integer.
echo "<b>floor(4.3): </b>". floor($num). "<br>";

//Rounds figure value .
echo "<b>round(4.3):</b> " . round($num) . "<br>";
echo "<b>round(4.7):</b> " . round(4.7) . "<br>";



//7. intdiv(), pow(), sqrt() example 
echo "<h2>6. intdiv(), pow(), sqrt() functions Example</h2>";

//Performs integer division and returns only the integer part.
echo "<b>intdiv (10,3): </b>" .intdiv(10, 3) . "<br><br>";


//Returns the value of a number raised to a power.
echo "<b> pow(2, 3) = 2x2x2: </b>". pow(2, 3). "<br>"; // 2³ = 8
echo "<b>pow(5, 2): = 5x5</b> " . pow(5, 2) . "<br><br>";


//Returns the square root of a number.
echo "<b>sqrt(16):</b> " . sqrt(16) . "<br>";
echo "<b>sqrt(25):</b> " . sqrt(25) . "<br>";




// 8. die() & exit function
echo "<h2>6. die(), exit(), functions Example</h2>";
//stops the execution of the script and displays a message.
echo "hello world <br>";
echo "hello world <br>";
echo "hello world <br>";
die();  // same used in exit() - function
echo "hello world <br>";
echo "hello world <br>";
echo "hello world <br>";


?>

</body>
</html>
