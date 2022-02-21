<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>je mama</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

</header>
<body>
  <?php include "menudeel.php"?>
  <h2 class="subtitel">Hier kan je berekenen welk cijfer je moet halen in je volgende toets om een bepaald gemiddelde te staan</h2>


  <div style="margin-top:20px;float:center">
  <div style="float:center;margin-top:0;margin-right:auto;margin-bottom:0;margin-left:auto;max-height:272.5;width: 400px;">
    <div style="text-align:center;">
      <label for="doel" >Je doel:</label><br>
      <input type="text" id="doel" name="doel" value="7"><br><br>
      <label  style="margin-bottom:20px" for="wegvolgpw">Weging van je volgende toets:</label><br>
      <input type="text" id="wegvolgpw" name="wegvolgpw" value="1"><br><br>
      </div>
    <div style="margin-bottom:5.5px">
      <label  style="margin-left:15%;margin-right:3.5%" for="toets1">Cijfers van je toetsen:</label>
      <label  for="wegtoets1">Wegingen van je toetsen:</label><br><br>
      <input  id="toets1" style="margin-left:15%;margin-right:14%; width:140px" type="text" name="toets1" value="6">
      <input style="width:30px" type="text" id="wegtoets1" name="wegtoets1" value="2">
      <button class='cijfersmm'  id='knop1' onclick='laatzien2()'><b>+</b></button>
    </div>

    <?php

    for ($x=2;$x<11;$x++){
      $y = $x-1;
      $z = $x+1;

      echo "
      <div style='padding:0px;margin-top:20px;margin-bottom:20px;margin-left:15%; display:none;' id='toets{$x}0'>
        <input style=\"width:140px;margin-right:14%;margin-bottom:5.5px;margin-top:5.5px\" type=\"text\" id=\"toets{$x}\" name=\"toets{$x}\" value=\"0\">
        <input style=\"width:30px\" type=\"text\" id=\"wegtoets{$x}\" name=\"wegtoets{$x}\" value=\"0\">
        <table id=\"tabel\" style=\"display:inline\">
          <tr id=\"knop{$x}\" style=\"display:inline\">
            <td><button class='cijfersmm' style='float:center; display:inline;padding-bottom:11px;height:22px;width:22px' onclick='laatzien{$y}()'><b>-</b></button></td>
            <td><button class='cijfersmm' style='float:center; margin-top:1px;display:inline;height:22px;width:22px' onclick='laatzien{$z}()'><b>+</b></button></td>
          <tr>
        </table><br>
      </div>";
    }

    ?>
    <div id='toets110' style='margin-left:15%;display:none;text-align:center;'>
      <input style="width:140px; margin-top:5.5px;margin-right:14%" type="text" id="toets11" name="toets11" value="0">
      <input style="width:30px" type="text" id="wegtoets11" name="wegtoets11">
      <button class='cijfersmm' style='float:center;padding-bottom:11px; display:inline;height:22px;width:22px' id='knop11'onclick='laatzien10()' value="0"><b>-</b></button><br>
    </div>
    <!--<input style="background-color:red" type="submit" value="Submit">-->
    <br>
    <div style="text-align:center">
      <button style="width:10%;min-width:70px;text-align:center;float:center;" onclick='bekijk()'>Bereken</button>
    </div>
  </div>
  </div>

  <p style='text-align:center' id="antwoord"></p>

    <script>
    <?php


    for ($x=1;$x<12;$x++){
      echo "function laatzien{$x}(){";
      for ($t=1;$t<12;$t++){
        $invul = "toets{$t}0";
        if ($x < ($t)){
          echo "document.getElementById('$invul').style.display = 'none';\n";
        } else{
          echo "document.getElementById('$invul').style.display = 'inline';\n";
        }
        $knoppie = "knop{$t}";
        if ($x == ($t)){
          echo "document.getElementById('{$knoppie}').style.display = 'inline';\n";
        } else {
          echo "document.getElementById('{$knoppie}').style.display = 'none';\n";
        }
        if ($x < $t){
          $ietsin = "toets{$t}";
          $ietsin2 = "wegtoets{$t}";
          echo "document.getElementById('{$ietsin}').value = '';\n";
          echo "document.getElementById('{$ietsin2}').value = '';\n";
        }
      }
      echo "}\n";
    }

    ?>

    function bekijk(){
      var x = '';
      var cijfers = 0;
      var wegingen = 0;
      var doel = 0;
      var wegging = 0;
      for (i=1; i <12; i++) {
        cijfers += (document.getElementById("toets"+i).value) * (document.getElementById("wegtoets" + i).value);
      }
      for (r=1; r < 12; r++) {
        wegingen = wegingen + (document.getElementById('wegtoets'+r).value*1)
        console.log(wegingen)
      }

      wegging = Number(document.getElementById('wegvolgpw').value)
      wegingen = wegingen + wegging
      doel = document.getElementById('doel').value
      var antwoordjava = ((doel * wegingen)-cijfers)/wegging
      if (antwoordjava < 1){
        document.getElementById('antwoord').innerHTML = 'Je gaat sowieso je doel halen! Je zou namelijk een ' +antwoordjava+' moeten halen.'
      } else if (antwoordjava > 10){
        document.getElementById('antwoord').innerHTML = 'Je kan je doel niet meer halen. Je zou namelijk een ' +antwoordjava+' moeten halen.'
      } else {
        document.getElementById('antwoord').innerHTML = 'Dit is wat je moet halen: '+antwoordjava
      }

      console.log(cijfers)
      console.log(doel)
      console.log(wegingen)
      console.log(wegvolgpw)
    }


    </script>
</body>
