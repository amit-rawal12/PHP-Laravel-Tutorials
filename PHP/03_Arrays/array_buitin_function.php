<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
echo "<h2>1. index array (normal array)</h2><br>";
$names = ["Amit", "Sumit", "Sunny", "Pratham"];

echo "<b>Orinal Index Array</b><br>";
echo "<pre>";
    print_r($names);
echo "</pre>";
echo "<hr>";

//associative array
echo "<h2>2.Associative array (key => value) pair</h2>";
$users = [
    "name" => "Amit",
    "age" => 23,
    "city" => "Umbergaon"
];

echo "Associative array<br>";
echo "<pre>";
print_r($users);
echo "</pre>";

echo "Name: ".$users["name"]."<br>";
echo "Age: ". $users["age"]."<br>";
echo "City: ".$users["city"]."<br>";
echo "<hr>";

//3. Multidimensional array
echo "<h2>3.Multidimensional array </h2>";

$students = [
    ["id" => 1, "name" => "Amit", "marks" => 79],
    ["id" => 2, "name" => "Sunny", "marks" => 69],
    ["id" => 3, "name" => "SD", "marks" => 59],
];

echo "<b>All Student</b><br>";
echo "<pre>";
print_r($students);
echo "</pre>";

//loop through student print:
echo "<b>loop through student print:</b><br><br>";

foreach ($students as $x){
    echo "ID {$x['id']} | Name: {$x['name']} | Marks: {$x['marks']}<br>";
}
echo "<hr>";


//4.use count() / sizeof()
echo "<h2>4. use count()/ sizeof() function</h2>";
echo "Total names: " .count($names)."<br>";  //total names count
echo "total Studnets: ".sizeof($students)."<br>";

echo "<hr>";

/* ============================
   5. Adding / Removing Elements
   array_push, array_pop, array_shift, array_unshift
   ============================ */
   echo "<h2>5. add / remove element</h2>";
   $fruits = ["Apple", "Oranage", "Mango"];
   echo "<b>Original fruits print</b><br>";
   echo "<pre>";
   print_r($fruits);
   echo "</pre>";

   array_push($fruits, "Banana"); // Add at the end
   echo "<b>1.after used array_push  add (banana) at the end</b>:<br>";
   echo "<pre>";
   print_r($fruits);
   echo "</pre>";

   array_pop($fruits); //remove last element
   echo "<b>2.after used array_pop() removed last ele.</b><br>";
   echo "<pre>";
   print_r($fruits);
   echo "</pre>";

   array_unshift($fruits, "Grapes"); //Add at the start
   echo "<b>3.after used array_unshift add the first</b>";
   echo "<pre>";
   print_r($fruits);
   echo "</pre>";

   array_shift($fruits); // removed fist ele.
   echo "<b>4.after used array_shift remove first ele.</b>";
   echo "<pre>";
   print_r($fruits);
   echo "</pre>";
   echo "<hr>";

   /* ============================
   6. sort(), rsort(), asort(), arsort(), ksort(), krsort()
   ============================ */

   echo "<h2>6. Sorting Functions</h2>";
   $num = [50, 10, 40, 60, 20,];

   echo "<b>Original values print</b><br>";
   echo "<pre>";
   print_r($num);
   echo "</pre>";

   sort($num);   // Acedending Order 
   echo "<b>after used sort() value is Acedending Order</b><br>";
   echo "<pre>";
   print_r($num);
   echo "</pre>";

   rsort($num); //Decending Order
   echo "<b>after used is rsort value is decending order</b><br>";
   echo "<pre>";
   print_r($num);
   echo "</pre>";
   echo "<hr>";

   //Associative array
   $marks = [
    "Amit" => 80,
    "Summit" => 70,
    "SD" => 60,
   ];
   echo "<b>Original value Associative array</b><br>";
   echo "<pre>";
   print_r($marks);
   echo "</pre>";

   asort($marks); // sort by value ASCE
   echo "<b>after used asort() function sorting value ACE Order</b><br>";
   echo "<pre>";
   print_r($marks);
   echo "</pre>";

    arsort($marks); // sort by value DESC
   echo "<b>after used arsort() function sorting value DESC Order</b><br>";
   echo "<pre>";
   print_r($marks);
   echo "</pre>";

    ksort($marks); // sort by key ACE
   echo "<b>after used ksort() function sorting key ACE Order</b><br>";
   echo "<pre>";
   print_r($marks);
   echo "</pre>";

krsort($marks); // sort by key DESC
   echo "<b>after used krsort() function sorting key DESC Order</b><br>";
   echo "<pre>";
   print_r($marks);
   echo "</pre>";

   echo "<hr>";

   /* ============================
   7. in_array(), array_search(), array_key_exists()
   ============================ */

   echo "<h2>7.Search / Checked Function</h2>";
   $colors = ["red", "green", "blue", "yellow",];
   echo "<b>Colors</b><br>";
   echo "<pre>";
   print_r($colors);
   echo "</pre>";


   echo "<b>1. Usinng in_array function </b><br>";
   if (in_array("yellow", $colors)){  //in_array
    echo "'yellow' found is array using in_array().<br><br>";
   }

   echo "<b>2.array_search using find index position</b><br>";
   $key = array_search("yellow", $colors); //array_search   
   echo "array_search('yellow') gives key: $key<br>";

   $acc = ["a" => 1, "b" => 2, "c" => 3];
   echo "<b>Associative array  key exit function</b><br>";
   echo "<pre>";
   print_r($acc);
   echo "</pre>";

   if(array_key_exists("b", $acc)){ // exit array
    echo "Key 'b' exists in \$assoc using array_key_exists().<br>";
   }
   echo "<hr>";


   /* ============================
   8. array_keys(), array_values()
   ============================ */

echo "<h2>8. array_keys() and array_values()</h2>";
echo "<b>array_keys return key:</b><br>"; 
echo "<pre>";
print_r(array_keys($acc)); //return key 
echo "</pre>";

echo "<b>array_values  return the value :</b><br>";
echo "<pre>";
print_r(array_values($acc)); //
echo "</pre>";

echo "<hr>";

/* ============================
   9. array_merge(), array_combine()
   ============================ */

echo "<h2>9. array_merge() and array_combine()</h2>";
$arr1 = ["A", "B", "C"];
$arr2 = ["D", "E"];

echo "<b>\$arr1:</b><br><pre>";
print_r($arr1);
echo "</pre>";

echo "<b>\$arr2:</b><br><pre>";
print_r($arr2);
echo "</pre>";

$merged = array_merge($arr1, $arr2);  // combine both array
echo "<b>array_merge(\$arr1, \$arr2):</b><br><pre>";
print_r($merged);
echo "</pre>";

//array_combine()
$keys   = ["id", "name", "age"];
$values = [1, "Amit", 22];

$combined = array_combine($keys, $values);
echo "<b>array_combine(\$keys, \$values):</b><br><pre>";
print_r($combined);
echo "</pre>";

echo "<hr>";

/* ============================
   10. array_slice(), array_chunk()
   ============================ */

   echo "<h2>10. array_slice() and array_chunk()</h2>";

   $letters = ["A", "B", "C", "D", ];
   echo "<b>Original \$letters:</b><br><pre>";
print_r($letters);
echo "</pre>";

$sliced = array_slice($letters, 2); // from index 2, length 3
echo "<b>1. The array_slice() function returns selected parts of an array.:</b><br><pre>";
print_r($sliced);
echo "</pre>";

$chunks = array_chunk($letters, 2);
echo "<b>2. The array_chunk() function splits an array into chunks of new arrays.:</b><br><pre>";
print_r($chunks);
echo "</pre>";

echo "<hr>";

/* ============================
   11. array_unique(), array_diff(), array_intersect()
   ============================ */
   echo "<h2>11. array_unique(), array_diff(), array_intersect()</h2>";
$nums1 = [1, 2, 2, 3, 4, 4, 5];
echo "<b>Original \$nums1:</b><br><pre>";
print_r($nums1);
echo "</pre>";

$unique = array_unique($nums1);  // removed duplicate value 
echo "<b>1.The array_unique() function removes duplicate values from an array:</b><br><pre>";
print_r($unique);
echo "</pre>";

//array_diff
$a1 = [1, 2, 3, 4];
$a2 = [3, 4, 5, 6];

echo "<b>\$a1:</b><br><pre>";
print_r($a1);
echo "</pre>";

echo "<b>\$a2:</b><br><pre>";
print_r($a2);
echo "</pre>";

$diff = array_diff($a1, $a2);
echo "<b>2. The array_diff() function compares the values of two (or more) arrays(same value does not print):</b><br><pre>";
print_r($diff);
echo "</pre>";

$common = array_intersect($a1, $a2); //array_itersect
echo "<b>3. Compare the values of two arrays, and print the only matches array:</b><br><pre>";
print_r($common);
echo "</pre>";
echo "<hr>";

/* ============================
   12. array_map(), array_filter(), array_reduce()
   ============================ */

   echo "<h2>12. array_map(), array_filter(), array_reduce()</h2>";
   $numbers = [1, 2, 3, 4, 5];

   echo "<b>Original \$numbers:</b><br><pre>";
print_r($numbers);
echo "</pre>";

$double = array_map(function($n){ //array_map
    return $n * 2;
},$numbers);

echo "<b>array_map() – Double each value:</b><br><pre>";
print_r($double);
echo "</pre>";

$even = array_filter($numbers, function($n) { //array_filter
    return $n % 2 == 0;
});
echo "<b>array_filter() – Keep even values:</b><br><pre>";
print_r($even);
echo "</pre>";


$sum = array_reduce($numbers, function($carry, $item){
    return $carry + $item;
}, 0);

echo "<b>array_reduce() – Sum of all values:</b><br>";
echo "Sum = $sum<br>";
echo "<hr>";

/* ============================
   13. shuffle(), array_rand(), array_sum(), array_product()
   ============================ */
echo "<h2>13. Other Useful Functions</h2>";

$items = ["A", "B", "C", "D", "E"];

echo "<b>Original \$items:</b><br><pre>";
print_r($items);
echo "</pre>";

shuffle($items);  //shuffle
echo "<b>1. Randomize the order of the elements in the array shuffle(\$items):</b><br><pre>";
print_r($items);
echo "</pre>";

$randomKey = array_rand($items);  //array_rand
echo "<b>The array_rand() function returns a random key from an array: 
<br></b> random key = $randomKey, value = {$items[$randomKey]}<br><br>";

$nums2 = [2, 3, 4];  // array_sum, array_product
echo "<b>\$nums2:</b><br><pre>";
print_r($nums2);
echo "</pre>";

echo "Return the sum of all the values in the array:  = " . array_sum($nums2) . "<br>";
echo "array_product means multiplication all value = " . array_product($nums2) . "<br>";

echo "<hr>";


/* ============================
   14. range(), compact(), extract()
   ============================ */
echo "<h2>14. range(), compact(), extract()</h2>";

$rangeNums = range(0, 5); //range
echo "<b>Create an array containing a range of elements from (0 to 5):</b><br><pre>";
print_r($rangeNums);
echo "</pre>";

$name = "Amit";
$age  = 22;
$city = "Umbergaon";

$compacted = compact("name", "age", "city");  //compact
echo "<b>The compact() function creates an array from variables and their values.:</b><br><pre>";
print_r($compacted);
echo "</pre>";

echo "<b>extract() example:</b><br>";  //extract
extract($compacted); // now $name, $age, $city created again
echo "Name = $name, Age = $age, City = $city<br>";

echo "<hr>";





?>
</body>
</html>
