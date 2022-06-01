<!DOCTYPE html>
<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>school</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">
<style>
div.raspberrylijst > li > a {
  color: black;
  list-style-type:none;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
</style>
</header>
<body style="margin:0px 0px">
  <?php include "menudeel.php" ?>
  <div>
    <img src="huygenslogo.png" alt="Huygens lyceum logo" style="margin-top:10px;margin-left:45%;margin-right:45%" width="10%" height="auto"></img>
    <h1 class="centreren" style="font-size:70px">School</h1>
  </div>


  <div style="display:flex;justify-content:center;align-items:center;flex-direction: column;">
    <p class="centreren" style="font-size:25px">Hier zijn een paar dingen gerelateerd aan school:</p>
    <ul>
      <div class="raspberrylijst">
      <li><a href="cijfer.php">Cijfer berekenen</a></li>
      <li><a href="gemiddelde.php">Gemiddelde berekenen</a></li>
    </div>
    </ul>
  </div>



</body>
