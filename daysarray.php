<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>PHP Variables, Arrays and Operators</h1>";
    $days_en = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); 
    echo "<p>The days of the week in English are:<br>";
    echo $days_en[0] . ", " . 
         $days_en[1] . ", " . 
         $days_en[2] . ", " . 
         $days_en[3] . ", " . 
         $days_en[4] . ", " . 
         $days_en[5] . ", " . 
         $days_en[6] . ".</p>";

    $days_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    
    echo "<p>The days of the week in French are:<br>";
    echo $days_fr[0] . ", " . 
         $days_fr[1] . ", " . 
         $days_fr[2] . ", " . 
         $days_fr[3] . ", " . 
         $days_fr[4] . ", " . 
         $days_fr[5] . ", " . 
         $days_fr[6] . ".</p>";
?>
</body>
</html>