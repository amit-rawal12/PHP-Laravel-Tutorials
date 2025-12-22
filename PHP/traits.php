<?php
// Define a trait
trait Message {

    public function showMessage() {
        echo "Hello from Trait!<br>";
    }
}

// Use trait in a class
class User {
    use Message;
}

// Another class using same trait
class Admin {
    use Message;
}

$user = new User();
$user->showMessage();

$admin = new Admin();
$admin->showMessage();


?>
