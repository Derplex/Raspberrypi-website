<?php //ini_set('display_errors', 1); ini_set('display_startup_errors', 1);error_reporting(E_ALL);?>
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


  function lampje($status){
    $ch = curl_init("http://192.168.2.24:5000/lampje/{$status}");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    //echo "x{$output}x";
  }


  $a=test_input($_POST["status"]);

  if ($a=="aan"){
    //echo "aan";
    lampje($a);

} else if ($a=="uit"){
    lampje($a);
} else {

}


   ?>


</body>
