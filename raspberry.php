<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>raspberry</title>
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
  <?php include "menudeel.php"?>
  <img src="rasplogo.png" alt="raspberry pi" style="margin-left:45%;margin-right:45%;margin-top:10px" width="10%" height="auto"</img>
  <h1 class="centreren" style="font-size:70px">Raspberry pi</h1>

  <div style="display:flex;justify-content:center;align-items:center;flex-direction: column;">
  <p>Dit zijn een paar dingen gerelateerd aan de Raspberry pi</p>

  <ul>
  <div class="raspberrylijst">
    <li><a href="lampje.php">Lampje</a></li>
    <li><a href="scherm.php">Scherm</a></li>
    <li><a href="mrslampje.php">Morse</a></li>
    <li><a href="buzzer.php">Buzzer</a></li>
    <li><a href="temperatuur.php">Temperatuur</a></li>
  </div>
  </ul>
  </div>
</body>
