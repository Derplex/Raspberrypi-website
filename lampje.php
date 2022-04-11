<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>lampje</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

</header>
<body style="margin:0px 0px">
  <?php include "menudeel.php"?>

  <h2 class="subtitel">Dit is een lampje</h2>

  <div style="text-align:center">
  <form method="post" >
    <input class="input" type="submit" name="status" value="aan">
    <input class="input" type="submit" name="status" value="uit">
  </form>
  </div>
  <?php


  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  $a=test_input($_POST["status"]);
  if ($a=="aan"){
  passthru("/home/pi/lampje.py \"aan\"");
} else if ($a=="uit"){
  passthru("/home/pi/lampje.py \"uit\"");
} else {
  echo "<script>alert(\"dont try to hack me\")";
}

   ?>


</body>
