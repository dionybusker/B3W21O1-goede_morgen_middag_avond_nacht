<?php
    $date = date("H:i", strtotime("+1 HOUR"));

    $img = "";
    $daytime = "";

    if ($date < 6) {
        $img = "img/night.png";
        $daytime = "nacht";
    } elseif ($date >= 6 && $date < 12) {
        $img = "img/morning.png";
        $daytime = "morgen";
    } elseif ($date >= 12 && $date < 18) {
        $img = "img/afternoon.png";
        $daytime = "middag";
    } elseif ($date >= 18 && $date < 24) {
        $img = "img/evening.png";
        $daytime = "avond";
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

        <div>
            <h1>Goede <?php print $daytime ?>!</h1>
            <h1><?php print $date ?></h1>
        </div>


        <script src="js/script.js"></script>
    </body>
</html>