<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>morse</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

</header>
<body style="margin:0px 0px">
  <?php include "menudeel.php"?>

  <h2 class="subtitel">Hier kan je een text omzetten naar morse</h2>

  <div style="text-align:center">
  <form method="post" >
    <input class="input" type="text" name="morse" class="input"></input><br>
    <input class="input" type="submit" class="input"></input>
  </form>
  </div>

  <?php


  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  $a=test_input($_REQUEST["morse"]);
  if ($a){
      $b= str_replace('_',' ',$a);
      passthru("/home/pi/morseweb.py \"$b\"");
  }

   ?>


</body>
