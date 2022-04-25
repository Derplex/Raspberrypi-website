<!DOCTYPE html>
<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>home</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">

<style>
.doos{
  position:absolute;
  margin-top:80px;
  width:50px;
  height:50px;
  left:20%;
  background-color:red;
  animation-name:animatie;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-direction:alternate;
  animation-timing-function:linear;
}


.flex{
  display:flex;
  width:90%;
  margin-left:5%;
}
.flex > div{
  width:20%;
  justify-content:center;
}
.flex > h1{
  width:60%;
}
@keyframes animatie{
0% {background-color:red;left:20%}
20% {background-color:orange;left:32%}
40% {background-color:yellow;left:44%}
60% {background-color:green;left:56%}
80% {background-color:blue;left:68%}
100% {background-color:purple;left:80%}
}


</style>


</header>
<body style="margin:0px 0px">
<!-- HIER KOMT DE DROPDOWN MENU"-->
<?php include "menudeel.php" ?>




<script>
//hier kan je javascript typen
</script>
<!-- of je kan javascript van een bestand hier krijgen:-->
<script type="text/javascript" src="javascript.js"></script>


<div class="flex">
  <div><img src="raspboard.jpg" alt="raspberry pi bord" style="margin-top:44.725px" width="100%"></div>
  <h1 style="text-align:center;font-size:80px">Denkkracht</h1>
  <div><img src="websitelogo.png" alt="website" style="margin:40px 20px" width="80%"></div>

</div>

  <p class="centreren" style="font-size:20px;text-align:center">Dit is ons denkkracht project</p>
  <p class="centreren" style="font-size:20px;text-align:center">Wij zijn Dario Schmidt en Ruben Jochemsen</p>
  <p class="centreren" style="font-size:20px;text-align:center">We hebben een website gemaakt waarmee je een paar handelingen op een <strong>Raspberry pi</strong> kunt uitvoeren</p>
  <p class="centreren" style="font-size:20px;text-align:center">Ook hebben we de website een aantal andere functionaliteiten gegeven</p>
  <div class="doos">
  </div>
</body>
