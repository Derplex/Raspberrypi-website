<!DOCTYPE html>
<html lang=nl-NL>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
<title>overhoring</title>
<!-- HIER MOETEN WE DE CSS IN DOEN:-->
<link rel="stylesheet" href="style.css">
<style>
.body{
  width:100%;
  display:flex;
  flex-direction: column;
  justify-content:center;
  align-items: center;
}
.container {
  width:500px;
  max-width:80%;
  height:300px;

  display:flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  padding:10px;
  margin: auto;

  border:3px dotted black;
  background-color:#80461B;
  border-radius:15px;

}

.inputfield{
  border: 2px solid black;
  height: 20px;
  width:150px;
}
.button{
  border:1px solid black;
  background
  width:80px;
  height:20px;
  margin-top:10px;
  display:inline-block;
}
.startbutton{
  width:220px;
  height:50px;
  background-color: red;
  color:white;
  border-radius: 10px;
  font-size:30px;
}
.vraag{
  font-size: 20px;
  margin:40px 0px;
}
.hide {
  display:none;
}

</style>

<!--
HIER BEGINT DE JAVASCRIPT
-->

<script>

const vragen=[
["accipio","accepi","acceptum","ontvangen, vernemen"],
["ago","egi","actum","drijven, handelen, gebeuren (pass)"]];

const soortvragen = ["praes","pf","ppp","vert"];
const vraagadds = ["Wat is de 1e pers ev praesens van ","Wat is de 1e pers ev perfectum van ", "Wat is de nom onz ppp van ",
"Wat is de vertaling van "];
const soortvraag = new Map();
var vraagindex;
var tworandnums;


function shufflearray(array) {
  for (let i = array.length -1; i > 0; i--) {
    let j = Math.floor(Math.random() * i)
    let k = array[i]
    array[i] = array[j]
    array[j] = k
  }
  return array;
}

function diffrandnumbers(min,max,amount){
  let numbers = [];
  let output = [];
  for (var i=min;i<=max;i++ ){
    numbers.push(i);
  }
  numbers=shufflearray(numbers);
  for (var i = 1;i<=amount;i++){
    output.push(numbers.pop());
    numbers=shufflearray(numbers);
  }
  return output;
}




</script>


</header>


<body style="margin:0px 0px">
  <?php include "menudeel.php" ?>

  <script>

  function start(){
    const startbtn = document.getElementById("startbutton");
    const submitbtn = document.getElementById("submitbutton");
    const textfield = document.getElementById("inputfield");
    const score = document.getElementById("score");
    alert(vragen);
    score.classList.remove("hide");
    submitbtn.classList.remove("hide");
    textfield.classList.remove("hide")
    startbtn.classList.add("hide");
    stelvraag();

  }


  function checkinput(){
    //submit is zichtbaar
    const textfield = document.getElementById("inputfield");
    const nextbtn = document.getElementById("nextbutton");
    const submitbtn = document.getElementById("submitbutton");


    var input = textfield.value;
    //window.alert(input);
    if (input==""){
      alert("Voer ten minste iets in...");
    } else{
      if (input==vragen[vraagindex]){
        alert("Correct!");
      } else {
        alert("fout");
      }

      submitbtn.classList.add("hide");
      nextbtn.classList.remove("hide");
      textfield.classList.add("hide");
    }
    textfield.value="";
  }



  function stelvraag(){
    //next is zichtbaar
    const vragen=[
    ["accipio","accepi","acceptum","ontvangen, vernemen"],
    ["ago","egi","actum","drijven, handelen, gebeuren (pass)"]];

    const nextbtn = document.getElementById("nextbutton");
    const submitbtn = document.getElementById("submitbutton");
    const pvraag = document.getElementById("vraag");
    const textfield = document.getElementById("inputfield");

    textfield.classList.remove("hide");
    nextbtn.classList.add("hide");
    submitbtn.classList.remove("hide");


    vraagindex = Math.floor(Math.random()*(vragen.length+1));
    tworandnums = diffrandnumbers(1,soortvragen.length,2);
    soortvraag.clear();
    soortvraag.set(tworandnums[0],tworandnums[1]);
    tworandnums=[];
    pvraag.innerHTML = vraagadds[1]+ vragen[vraagindex][0];

  }

  document.addEventListener("keydown", function(event) {
    if (event.keyCode === 13) {
        checkinput();
    }
  });

  </script>


  <div>
    <h1 class="centreren" style="font-size:70px">Overhoring</h1>
  </div>
  <p class="centreren">Dit is een pagina dat de latijn stamstijden overhoort</p>


  <div class="container">
    <p id="score" class="score hide"></p>
    <p id="vraag" class="vraag">Als je wilt beginnen, klik dan op Start</p>
    <input type="text" id="inputfield" class="inputfield hide"></input>
    <input type="button" id="submitbutton" class="button hide" value ="Submit" onclick="checkinput();">
    <input type="button" id="startbutton" class="button startbutton" value ="Start" onclick="start();">
    <input type="button" id="nextbutton" class="button nextbutton hide" value ="Volgende" onclick="stelvraag();">
  </div>


</body>
