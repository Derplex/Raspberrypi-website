<!DOCTYPE html>
<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>temperatuur</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">
</header>
<body style="margin:0px 0px">
  <?php include "menudeel.php"; ?>
  <h2 style="text-align:center;font-size:9vmin">Dit is de laatst gemeten temperatuur</h2>
  <p style="text-align:center;font-size:4vmin;margin-top:80px">
  <?php
  passthru("tail -n 1 temperaturen.txt");
  ?>
  </p>



</body>
