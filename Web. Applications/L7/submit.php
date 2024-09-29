<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $regdno = $_POST['regdno'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO students (rollno, name, regdno, email, branch) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $rollno, $name, $regdno, $email, $branch);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>