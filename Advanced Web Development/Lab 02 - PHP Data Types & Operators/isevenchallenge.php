<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Programming Lab 2">
    <meta name="keywords" content="PHP, Even Number, GET">
    <meta name="author" content="Minh Duc Nguyen">
    <title>Even Number Checker</title>
</head>

<body>

    <h1>Web Programming - Lab 2</h1>
    <h2>Even Number Checker</h2>

    <?php

    // Check whether a value was submitted from the form
    if (isset($_GET["number"])) {

        // Store the submitted value
        $value = $_GET["number"];

        // Check whether the value is numeric
        if (is_numeric($value)) {

            // Round decimal numbers to the nearest integer
            $number = round($value);

            // Determine whether the number is even or odd
            $message = ($number % 2 == 0)
                ? "The variable <strong>$number</strong> contains an <strong>even</strong> number."
                : "The variable <strong>$number</strong> contains an <strong>odd</strong> number.";

        } else {

            $message = "The value '<strong>$value</strong>' is not a valid number.";

        }

    } else {

        $message = "Please enter a number using the form.";

    }

    // Display the result
    echo "<p>$message</p>";

    ?>

    <p><a href="numberform.php">Try another number</a></p>

</body>
</html>