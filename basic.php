<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  print hello world with concat string:
    echo "program to print hello world with concat string:<br><br>";
    $a = "hello";
    $b = "world";
    $c = $a . $b;
    echo $c;
    echo "<hr>";
    
    //String & function
    echo "<h1> String & function</h1>";
    echo "Start the slice at index 6 and end the slice 5 positions later:<br>";
    $x = "Hello World!";
    echo substr($x, 6, 5);
    echo "<hr>";

    echo "String lowercase:-<br>";
    echo strtolower($x);
    echo "<hr>";

  echo "String uppercase:-<br>";
    echo strtoupper($x);
    echo "<hr>";  
    
// Numbers intger
echo "<h1> Numbers intger</h1> <br>";
    $d = 5;
    $f = 5.34;
    $z = "25";

 var_dump($d);
 echo "<br>";  
 var_dump($f);
  echo "<br>";  
 var_dump($z);
echo "<hr>"; 

echo " is_int() function is used to check if the type of a variable is integer.<br>";
var_dump(is_int($d));  
 echo "<br>";  
var_dump(is_int($f));  // is init is check variable is interger or not
echo "<hr>"; 

echo " is_float() function is used to check if the type of a variable is integer.<br>";
var_dump(is_float($d));
echo "<br>";
var_dump(is_float($f));// is float is check variable is float or not

//----------------------------------------------------
echo "<hr>"; 
echo "PHP Casting:<br>";
$d = (string) $d;
var_dump($d);
echo "<br>";
$f = (string) $f;
var_dump($f);
echo "<hr>";

//MATH FUNCTION
echo "<h2> PHP Math </h2><br>";
echo (pi()). "  pi value <br>";  // denote pi value

echo "min() and max() functions:<br>";
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200). "<br>");

echo "abc function convert positive number:<br>";
echo(abs(-6.7). "<br>");  


echo "The sqrt() function returns the square root of a number:<br>";
echo(sqrt(64)."<br>");

echo "The round() function rounds a floating-point number to its nearest integer: <br>";
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60)."<br>");

echo "The PHP rand() function generates a random number:<br>";
echo(rand()."<br>");
echo "<hr>";

//PHP Constant
echo "<h1>PHP Constants</h1><br>";
echo "syntax  define(name, value)"; //syntax
echo "<p> name: Specifies the name of the constant<br>
value: Specifies the value of the constant</p><br>";


const MYCAR = "Volvo";
echo MYCAR;



    ?>
</body>
</html>
