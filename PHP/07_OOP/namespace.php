<?php
/*
====================================================
PHP Namespace Example (CORRECT)

1.If two classes have the same name, PHP will throw an error.
2.Namespaces solve this problem by separating them.
3.Helps avoid class name conflicts
4. A namespace is used to group related classes, functions,
   or constants and to avoid name conflicts between them.
*/


// First namespace
namespace Company {

    class Employee {
        public function show() {
            echo "Employee class from Company namespace<br>";
        }
    }
}

// Second namespace
namespace School {

    class Employee {
        public function show() {
            echo "Employee class from School namespace<br>";
        }
    }
}

// Global namespace (execution code)
namespace {

    $emp1 = new Company\Employee();
    $emp1->show();

    $emp2 = new School\Employee();
    $emp2->show();
}
