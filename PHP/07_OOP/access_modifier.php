<?php

// PUBLIC ACCESS MODIFIER
class Demo {

    // Public property (accessible everywhere)
    public $name = "Amit";

    // Public method
    public function showName() {
        echo "Name: " . $this->name;
    }
}

$obj = new Demo();

$obj->showName();   //  allowed

echo "<br><br>";


// PROTECTED ACCESS MODIFIER
class ParentClass {

    // Protected 
    protected $salary = "20000";
}

class ChildClass extends ParentClass {

    // Public method accessing protected property
    public function showSalary() {
        echo "Salary: " . $this->salary; //  allowed (child class)
    }
}

$onj = new ChildClass();

$onj->showSalary();   //  allowed

//  Not allowed outside class
// echo $onj->salary;

echo "<br><br>";


// ==============================
// PRIVATE ACCESS MODIFIER
// ==============================
class Bank {

    // Private property
    private $bal = 500000;

    // Public method to access private property
    public function showBalance() {
        echo "Total Balance: " . $this->bal;
    }
}

// Object creation
$b = new Bank();

// Calling public method
$b->showBalance();   // ✅ allowed

// ❌ Not allowed directly
// echo $b->bal;

?>
