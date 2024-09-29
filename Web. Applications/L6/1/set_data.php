<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];

    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['semester'] = $semester;
    $_SESSION['year'] = $year;

    // Set cookies
    setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie('semester', $semester, time() + (86400 * 30), "/");
    setcookie('year', $year, time() + (86400 * 30), "/");

    header("Location: display.php");
    exit();
}
?>
