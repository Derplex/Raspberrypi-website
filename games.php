<!DOCTYPE html>
<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>games</title>
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
  <h1 class="centreren" style="font-size:90px;color:red;">GAMES</h1>
  <div style="display:flex;justify-content:center;align-items:center;flex-direction: column;">
    <p style="font-size:25px" class="centreren">We hebben ook een paar games gemaakt, namelijk:</p>
    <ul>
      <div class="raspberrylijst">
      <li><a href="snake.php">Snake</a></li>

    </div>
    </ul>
</div>
</body>
