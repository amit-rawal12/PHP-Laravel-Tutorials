<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>
    <h2>PHP Form Handling is used to collect and process?br?>br>us er input from HTML forms using GET or POST methods</h2>
    <h2>Form Handling Example</h2>

    <form method = "post">
        Name: <input type = "text" name = "username"><br><br>
        Email <input type = "email" name = "email"><br><br>
        <button type = "submit" name = "btn" >Submit</button>
    </form>

    <?php
    if(isset($_POST['btn'])){
        $name  = $_POST['username'];
        $email = $_POST['email'];

    echo "<h3>Form Data Received:</h3>";
    echo "Name  : $name <br>";
    echo "Email : $email <br>";
    }
    ?>

</body>
</html>
