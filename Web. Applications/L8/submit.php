<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>

    <?php
    $fullPhoneNumber = htmlspecialchars($_POST['phoneNumber'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');

    if (preg_match('/^\+(\d{1,3})\s?(\d{8,10})$/', $fullPhoneNumber, $matches)) {
        $countryCode = $matches[1];
        $phoneNumber = $matches[2];
    } else {
        $countryCode = "Unknown";
        $phoneNumber = "Invalid format";
    }

    // Display sanitized results
    echo "<p><strong>Country Code:</strong> +$countryCode</p>";
    echo "<p><strong>Phone Number:</strong> $phoneNumber</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    ?>

    <br>
    <a href="index.html">Go Back to the Form</a>
</body>
</html>