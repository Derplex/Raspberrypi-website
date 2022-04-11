<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>schermpje</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

</header>
<body style="margin:0px 0px">
  <?php include "menudeel.php"?>
  <h2 class="subtitel">Dit is een scherm (met de raspberry aangestuurd 64x128 oled schermpje)</h2>


  <div style="text-align:center">
    <form method="post" >
      <input class="input" type="text" name="inhoud"></input><br>
      <input class="input" type="submit" name="submit"></input>
    </form>
  </div>
    <?php


    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $a=test_input($_REQUEST['inhoud']);

    if ($a){
      passthru("/home/pi/textoled.py \"$a\" 2>&1",$error);
      Print_r($a);
    }

     ?>

</body>
