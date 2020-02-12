<?php
    $date = date("H:i", strtotime("+1 HOUR"));
    // $date = date_default_timezone_set("Europe/Amsterdam");
  
    // print $date;
  
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>B3W1 - lab 2</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <h1>Goede <?php $day ?></h1>
        <h1><?php print $date ?></h1>

        <script src="js/script.js"></script>
    </body>
</html>