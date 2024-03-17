<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Validate and process the data (for demonstration, just printing here)
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>
