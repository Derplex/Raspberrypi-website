<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>schermpje</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

</header>
<body>
  <?php include "menudeel.php"?>
  <h2>Dit is een scherm (met de raspberry aangestuurd 64x128 oled schermpje)</h2>



    <form method="post" >
      <input type="text" name="inhoud"></input><br>
      <input type="submit" name="submit"></input>
    </form>

    <?php


    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $a=test_input($_REQUEST["status"]);
    Print_r($a);
    if ($a){
      passthru("python3 textoled.py $b");
    }

     ?>

</body>
