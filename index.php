<?php
// Define the User class
class User {
    // Declare properties
    public $firstName;
    public $lastName;

    // Constructor to set firstName and lastName
    public function __construct($firstName, $lastName) {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
    }

    // Method to return the greeting
    public function hello() {
        return "Hello, " . $this->firstName;
    }
}

// Create a new User object and set its firstName and lastName
$user1 = new User("Jonnie", "Roe");

// Access firstName and lastName of the object
$user1->firstName;
$user1->lastName;

// Function to call the hello() method on the $user1 object
function test() {
    global $user1;
    return $user1->hello();
}

// Call the test() function and print the result
echo test(); // Output: Hello, Jonnie