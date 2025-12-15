<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/*
====================================================
PHP File Handling Example
----------------------------------------------------
This example shows how to create, write,
and read a file in PHP.
====================================================
*/

$filename = "data.txt";

//write data to file
$file = fopen($filename, "w");  //Write (overwrite)
fwrite($file, "hello php file handling what about you!"); //data.txt file automatically genrate 
fclose($file);

// Read data from file means - showing output
$file  = fopen($filename, "r");  //// r = read mode
$content = fread($file, filesize($filename));
fclose($file);

echo $content;

?>
</body>
</html>
