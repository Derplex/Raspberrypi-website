<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>morse</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">
<style>
input.input {
  margin:20px;
  background-color:white;
  color:black;
  width:240px;
  font-size:20px;
  height:30px;
  border: 2px solid blue;
}
input.submit{
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

  <h2 class="subtitel">Hier kan je een text omzetten naar morse</h2>

  <div style="text-align:center">
  <form method="post" >
    <input class="input" type="text" name="morse" class="input"></input><br>
    <input class="submit" type="submit" class="input"></input>
  </form>
  </div>

  <?php


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function mrslampje($status) {
    $ch = curl_init("http://192.168.2.24:5000/morse/{$status}");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    //echo "x{$output}x";
  }

  $a=test_input($_REQUEST["morse"]);

  if ($a) {
      $b= str_replace('_',' ',$a);
      //Print_r($b);
      mrslampje($b);
  }

   ?>


</body>
