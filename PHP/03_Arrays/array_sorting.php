<!DOCTYPE html>
<html>
<body>

<?php
// ================================================
// 1. INDEXED ARRAY SORTING (A–Z / 0–9)
// ================================================
echo "<h3>1. sort() → Ascending (A–Z / 0–9)</h3>";

$names = ["Amit", "Sunny", "SD", "Pratham"]; // Indexed array
sort($names); // Ascending sort

echo "<b>Sorted Names (Ascending):</b><br>";
echo "<pre>";
print_r($names);
echo "</pre>";
echo "<hr>";


// ================================================
// 2. INDEXED ARRAY DESC SORTING (Z–A / 9–0)
// ================================================
echo "<h3>2. rsort() → Descending (Z–A / 9–0)</h3>";

$nums = [50, 10, 40, 20];
rsort($nums); // Descending sort

echo "<b>Sorted Numbers (Descending):</b><br>";
echo "<pre>";
print_r($nums);
echo "</pre>";
echo "<hr>";


// ================================================
// 3. ASSOCIATIVE ARRAY SORTING BY VALUE (ASC)
// ================================================
echo "<h3>3. asort() → Sort by values (Ascending)</h3>";

$marks = [
    "amit"  => 85,
    "rohan" => 70,
    "karan" => 90
];

asort($marks); // Sort by values ASC

echo "<b>Sorted by Values (Ascending):</b><br>";
echo "<pre>";
print_r($marks);
echo "</pre>";
echo "<hr>";


// ================================================
// 4. ASSOCIATIVE ARRAY SORTING BY VALUE (DESC)
// ================================================
echo "<h3>4. arsort() → Sort by values (Descending)</h3>";

arsort($marks); // Sort by values DESC

echo "<b>Sorted by Values (Descending):</b><br>";
echo "<pre>";
print_r($marks);
echo "</pre>";
echo "<hr>";


// ================================================
// 5. SORT BY KEYS (ASCENDING)
// ================================================
echo "<h3>5. ksort() → Sort by keys (A–Z)</h3>";

$students = [
    "d" => "Dinesh",
    "a" => "Amit",
    "c" => "Chirag",
    "b" => "Bhavesh"
];

ksort($students); // Key sort ASC

echo "<b>Sorted by Keys (Ascending):</b><br>";
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<hr>";


// ================================================
// 6. SORT BY KEYS (DESCENDING)
// ================================================
echo "<h3>6. krsort() → Sort by keys (Z–A)</h3>";

krsort($students); // Key sort DESC

echo "<b>Sorted by Keys (Descending):</b><br>";
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<hr>";


// ================================================
// 7. DEEP EXAMPLE – SORT ARRAY OF ARRAYS (BY VALUE)
// ================================================
echo "<h3>7. usort() → Custom sorting (Sort by Marks)</h3>";

$data = [
    ["name" => "Amit",    "marks" => 85],
    ["name" => "Rohan",   "marks" => 70],
    ["name" => "Karan",   "marks" => 90],
    ["name" => "Bhavesh", "marks" => 60]
];

// Sort array by marks ASC
usort($data, function($a, $b) {
    return $a["marks"] <=> $b["marks"];
});

echo "<b>Sorted Students by Marks (Ascending):</b><br>";
echo "<pre>";
print_r($data);
echo "</pre>";
echo "<hr>";

?>

</body>
</html>
