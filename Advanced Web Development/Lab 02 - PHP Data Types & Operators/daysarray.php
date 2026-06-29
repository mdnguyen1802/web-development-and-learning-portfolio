<!DOCTYPE html>
<html lang="en">
<head>
    <title>Days Array</title>
    <meta charset = "utf-8">
    <meta name = "description" content = "Advanced Web Development">
    <meta name = "keywords" content = "HTML, CSS, JavaScript, PHP">
    <meta name = "author" content = "Minh Duc Nguyen">
</head>

<body>

    <h1>Days of the Week</h1>

    <?php

        $days = array(
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        );

        echo "<p><strong>The days of the week in English are:</strong></p>";
        echo implode(", ", $days);

        echo "<br><br>";

        $days = array(
            "Dimanche",
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi"
        );

        echo "<p><strong>The days of the week in French are:</strong></p>";
        echo implode(", ", $days);

    ?>

</body>
</html>