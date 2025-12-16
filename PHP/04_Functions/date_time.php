<!DOCTYPE html>
<html>
<head>
    <title>PHP Date Examples</title>
</head>
<body>

<h1>PHP Date() Function Examples</h1>

<?php
// Simple date
echo "<h2>1. Today’s Date</h2>";
echo date("d-m-Y");

// Standard format
echo "<h2>2. Standard Format (Y-m-d)</h2>";
echo date("Y-m-d");

// Day / Month / Year separately
echo "<h2>3. Day, Month, Year</h2>";
echo "Day: " . date("d") . "<br>";
echo "Month: " . date("m") . "<br>";
echo "Year: " . date("Y") . "<br>";

// Beautiful full date
echo "<h2>4. Full Date Format</h2>";
echo date("l, d F Y");

// Time only
echo "<h2>5. Current Time</h2>";
echo date("H:i:s");

// Time with AM/PM
echo "<h2>6. Time with AM/PM</h2>";
echo date("h:i A");

// Date + Time Together
echo "<h2>7. Date + Time</h2>";
echo date("d-m-Y H:i:s");

// Custom format
echo "<h2>8. Custom Format</h2>";
echo date("l | d-M-Y | h:i:s A");

// Timezone Example
echo "<h2>9. Set Timezone (India)</h2>";
date_default_timezone_set("Asia/Kolkata");
echo date("d-m-Y h:i:s A");
?>

</body>
</html>
