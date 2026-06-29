<!DOCTYPE html>
<html lang="en">
<head>
    <title>Even Number Checker</title>
    <meta charset = "utf-8">
    <meta name = "description" content = "Advanced Web Development">
    <meta name = "keywords" content = "HTML, CSS, JavaScript, PHP">
    <meta name = "author" content = "Minh Duc Nguyen">
</head>

<body>

    <h1>Even Number Checker</h1>
~
    <?php

        $value = 4;

        if (is_numeric($value))
        {
            $number = round($value);

            $message = ($number % 2 == 0)
                ? "The variable $number contains an even number."
                : "The variable $number contains an odd number.";
        }
        else
        {
            $message = "The variable does not contain a number.";
        }

        echo "<p>$message</p>";

    ?>

</body>
</html>