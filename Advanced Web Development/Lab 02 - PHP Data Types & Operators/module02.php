<!DOCTYPE html>
<html lang="en">
<head>
    <title>Using Variables, Arrays and Operators</title>
    <meta charset = "utf-8">
    <meta name = "description" content = "Advanced Web Development">
    <meta name = "keywords" content = "HTML, CSS, JavaScript, PHP">
    <meta name = "author" content = "Minh Duc Nguyen">
</head>

<body>

    <h1>Web Programming - Lab 2</h1>

    <?php

        $marks = array(85, 85, 95);

        $marks[1] = 90;

        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;

        $status = ($ave >= 50) ? "PASSED" : "FAILED";

        echo "<p>The average score is $ave. You $status.</p>";

    ?>

</body>
</html>