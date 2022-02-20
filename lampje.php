<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>je mama</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

</header>
<body>
  <?php include "menudeel.php"?>

  <h2>Dit is een lampje</h2>


  <form method="post" >
    <input type="submit" name="status" value="'aan'">
    <input type="submit" name="status" value="'uit'">
  </form>
  <p><?php echo $status?></p>
  <?php
  $a=$_POST["status"];
  $status=$a;
  passthru("/test/Raspberrypi-website/lampje.py \"$a\" 2>&1",$error);

   ?>


</body>
