<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

<?php
// Start empty variables
$name = $email = "";
$nameErr = $emailErr = "";
$success = "";

// When form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // If no errors → show success message
    if ($nameErr == "" && $emailErr == "") {
        $success = "Form Submitted Successfully!<br>Name: $name<br>Email: $email";
    }
}
?>

<h2>PHP Form Validation (Same Page Output)</h2>

<form method="post" action="">
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;">* <?php echo $nameErr; ?></span>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;">* <?php echo $emailErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

<br>

<!-- SUCCESS / PRINT DATA AREA -->
<div style="color:green; font-weight:bold;">
    <?php echo $success; ?>
</div>

</body>
</html>
