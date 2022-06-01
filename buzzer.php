<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>buzzer</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">
<style>
input.input{
  margin:20px;
  background-color:blue;
  color:white;
  width:auto;
  font-size:20px;
  height:35px;
  border: 2px solid red;
}
</style>
</header>
<body style="margin:0px 0px">
  <?php include "menudeel.php"?>
  <h2 class="subtitel">Dit is een scherm (met de raspberry aangestuurd 64x128 oled schermpje)</h2>


  <div style="display:flex;justify-content:center;">
    <form method="post" >
      <input class="input" type="submit" name="inhoud" value="liedje"></input>
      <input class="input" type="submit" name="inhoud" value="toonladder"></input>
    </form>
  </div>




<?php

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function buzzer($status){
      $ch = curl_init("http://192.168.2.24:5000/buzzer/{$status}");
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_POST, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      //echo "x{$output}x";
    }

    $a=test_input($_REQUEST['inhoud']);

    if ($a){
      buzzer($a);
      //Print_r($a);
    }

     ?>

</body>
