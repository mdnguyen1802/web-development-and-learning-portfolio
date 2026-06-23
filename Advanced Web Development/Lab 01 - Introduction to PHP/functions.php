<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Built-in functions</title>
    <meta charset = "utf-8">
    <meta name = "description" content = "Advanced Web Development">
    <meta name = "keywords" content = "HTML, CSS, JavaScript, PHP">
    <meta name = "author" content = "Minh Duc Nguyen">
</head>

<body>

    <h1>Use of PHP built-in functions</h1>

    <?php
        /* Use of abs() and pow() built-in functions */

        echo "<p>Absolute value of -9 is: " . abs(-9) . ".</p>";
        echo "<p>2 to the power of 5 is: " . pow(2,5) . ".</p>";
    ?>

    <?php
        /* Use of decbin() and bindec() functions */

        echo "<p>Decimal equivalent of 1101 is: " . bindec("1101") . ".</p>";
        echo "<p>Binary equivalent of 14 is: " . decbin(14) . ".</p>";
    ?>

</body>
</html>