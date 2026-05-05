<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>My First PHP Page</h1>
    <?php
        $marks = array(85, 85, 95);
        $marks[1] = 90;
        $ave = ($marks[0] + $marks[1] + $marks[2])/3;
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }
        echo "<p>The average is: " . $ave . "</p>";
        echo "<p>The status is: " . $status . "</p>";
    ?>
</body>
</html>