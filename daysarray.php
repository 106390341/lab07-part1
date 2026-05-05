<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>PHP Variables, Arrays and Operators</h1>"
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        echo "<p>The days of the week in English are:</p>";
        echo "<ul>";
        foreach ($days as $day) {
            echo "<li>$day</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>