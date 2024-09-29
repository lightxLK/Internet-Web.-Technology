<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $aadhaar = htmlspecialchars($_POST['aadhaar']);

    // Save data to a file (you can modify this to save to a database)
    $file = fopen("user_data.txt", "a");
    fwrite($file, "Name: $name, Aadhaar: $aadhaar\n");
    fclose($file);

    // Display the entered data
    echo "Name: $name<br>";
    echo "Aadhaar Number: $aadhaar";
} else {
    echo "Invalid request method.";
}
?>