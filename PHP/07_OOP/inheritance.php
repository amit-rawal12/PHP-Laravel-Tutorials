<?php

// ---------------- BASE CLASS ----------------
class employee {

    // Public properties (accessible everywhere)
    public $name;
    public $age;
    public $salary;

    // Constructor: 
    function __construct($n, $a, $s) {

        // Assign values to class properties
        $this->name   = $n;
        $this->age    = $a;
        $this->salary = $s;
    }

    // Method to show employee information
    function info() {

        echo "<h2>Employee Profile</h2>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }
}


// ---------------- DERIVED CLASS ----------------
// Manager class inherits Employee class

class manager extends employee {

    // Extra properties only for manager
    public $ta = 1000;     // Travel Allowance
    public $phone = 300;  // Phone Allowance
    public $totalsalary;  // Total salary

    // Method overriding
    // Same function name as parent class
    function info() {

        // Calculate total salary
        $this->totalsalary = $this->salary + $this->ta + $this->phone;

        echo "<h2>Employee Profile</h2>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->totalsalary . "<br>";
    }
}


// ---------------- OBJECT CREATION ----------------

// Creating object of manager class
$e1 = new manager("Amit", 22, 20000);

// Creating object of employee class
$e2 = new employee("Sunny", 22, 20000);


// ---------------- METHOD CALLING ----------------

$e1->info();
$e2->info();

?>
