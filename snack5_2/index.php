<?php

include __DIR__."/db.php";


$parking = $_GET["parking"];
$hotelsFiltered = [];
$stars = $GET["stars"];
$hotelsFilteredStars = [];

// SE AL GETTO PASSO YES
if ($parking == "yes") {
  foreach ($hotels as $hotel) {
    // SE IL PARCHEGGIO é TRUE
    if ($hotel['parking'] == true) {
      // FAI IL PUSH
      $hotelsFiltered[] = $hotel;
    }
  }
}else {
  $hotelsFiltered = $hotels;
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php foreach ($hotelsFiltered as $hotel){?>
      <p>Nome Hotel: <?php echo $hotel['name'] ?></p>
      <p>Descrizione: <?php echo $hotel['description'] ?></p>
      <p>Parcheggio: <?php if ($hotel['parking'] == true) {
        echo "SI";
      }else {
        echo "NO";
      } ?></p>
      <p>Voto: <?php echo $hotel['vote'] ?></p>
      <p>Distanza dal centro: <?php echo $hotel['distance_to_center'] ?></p>
    <?php } ?>
  </body>
</html>
