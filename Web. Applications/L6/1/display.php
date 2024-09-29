<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Details</title>
</head>
<body>
    <h1>Details</h1>
    <h2>From Session:</h2>
    <p>Username: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Not set'; ?></p>
    <p>Semester: <?php echo isset($_SESSION['semester']) ? $_SESSION['semester'] : 'Not set'; ?></p>
    <p>Year: <?php echo isset($_SESSION['year']) ? $_SESSION['year'] : 'Not set'; ?></p>

    <h2>From Cookies:</h2>
    <p>Username: <?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : 'Not set'; ?></p>
    <p>Semester: <?php echo isset($_COOKIE['semester']) ? $_COOKIE['semester'] : 'Not set'; ?></p>
    <p>Year: <?php echo isset($_COOKIE['year']) ? $_COOKIE['year'] : 'Not set'; ?></p>
</body>
</html>
