<?php
    $date = date("H:i", strtotime("+1 HOUR"));
    // $date = date_default_timezone_set("Europe/Amsterdam");
  
    // print $date;

    $img = "";
    $daytime = "";

    if ($date < 6) {
        $img = "img/night.png";
        $daytime = "nacht";
    } elseif ($date > 6 && $date < 12) {
        $img = "img/morning.png";
        $daytime = "morgen";
    }
  
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>B3W21O1</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <img src="<?php print $img ?>" alt="">

        <h1>Goede <?php print $daytime ?>!</h1>
        <h1><?php print $date ?></h1>

        <script src="js/script.js"></script>
    </body>
</html>