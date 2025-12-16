<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1>PHP Superglobal Variables (All in One)</h1>

<!-- ===================== $_GET ===================== -->
<h2>1. $_GET Example</h2>
<a href = "?name=Amit&city=umbergaon">send Data using GET</a>

<?php
if(isset($_GET['name'])){
    echo "<p>Name: {$_GET['name']}</p>";
    echo "<p>Name: {$_GET['city']}</p>";
}
?>
<hr>

<!-- ===================== $_POST ===================== -->
<h2>2. $_POST Example</h2>
<form method = "post">
    Name: <input type = "text" name = "username">
    <button type = "submit" name = "btn">Submit</button>
</form>

<?php
if(isset($_POST['btn'])){
    echo "<p>Post Name: {$_POST['username']}</p>";
}
?>
<hr>

<!-- ===================== $_REQUEST ===================== -->
<h2>3. $_REQUEST Example</h2>
<form method = "get">
    Email: <input type = "email" name = "eamil">
    <button type = "submit">Submit</button>
</form>

<?php
if(isset($_REQUEST['eamil'])){
    echo "<p>Email from request: {$_REQUEST['email']}</p>";
}

?>

<hr>

<!-- ===================== $_SERVER ===================== -->
<h2>4. $_SERVER Example</h2>

<?php
echo "<p>Server Name: {$_SERVER ['SERVER_NAME']}</p>";
echo "<p>Reuest Method: {$_SERVER['REQUEST_METHOD']}</p>";
echo "<p> Script Name: {$_SERVER ['SCRIPT_NAME']}</p>";
echo "<p> User IP: {$_SERVER ['REMOTE_ADDR']}</p>";
?>

<hr>

<!-- ===================== $_SESSION ===================== -->
<h2>5. $_SESSION Example</h2>

<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "Amit Rawal";
}
echo "<p>Session User: {$_SESSION['user']}</p>";
?>

<hr>

<!-- ===================== $_COOKIE ===================== -->
<h2>6. $_COOKIE Example</h2>

<?php
setcookie("course", "PHP Tutorial", time() + 3600);

if (isset($_COOKIE['course'])) {
    echo "<p>Cookie Value: {$_COOKIE['course']}</p>";
} else {
    echo "<p>Cookie set. Refresh page.</p>";
}
?>

<hr>

<!-- ===================== $_FILES ===================== -->
<h2>7. $_FILES Example</h2>

<form method="post" enctype="multipart/form-data">
    Select File:
    <input type="file" name="uploadfile">
    <button type="submit" name="uploadBtn">Upload</button>
</form>

<?php
if (isset($_POST['uploadBtn'])) {
    $fileName = $_FILES['uploadfile']['name'];
    echo "<p>Uploaded File: $fileName</p>";
}
?>

<hr>

<!-- ===================== $GLOBALS ===================== -->
<h2>8. $GLOBALS Example</h2>

<?php
$a = 10;
$b = 20;

function addNumbers() {
    $GLOBALS['sum'] = $GLOBALS['a'] + $GLOBALS['b'];
}
addNumbers();

echo "<p>Sum using GLOBALS: $sum</p>";
?>

<hr>

<h2>✅ Summary</h2>
<ul>
    <li>$_GET – URL data</li>
    <li>$_POST – Form data</li>
    <li>$_REQUEST – GET + POST</li>
    <li>$_SERVER – Server info</li>
    <li>$_SESSION – Login/session</li>
    <li>$_COOKIE – Browser storage</li>
    <li>$_FILES – File upload</li>
    <li>$GLOBALS – Global variables</li>
</ul>


</body>
</html>
