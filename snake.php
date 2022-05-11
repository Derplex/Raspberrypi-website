<!DOCTYPE html>
<html>
<head>
  <title>Mini-Snake Game</title>
  <link href="style.css" rel="stylesheet">
  <link href="styles69.css" rel="stylesheet">

</head>
<?php include "menudeel.php" ?>
<body>
<h1 id="highScore">Highscore: 0</h1>
<h1 id="score">Score: 0</h1>
<canvas width="400" height="400" id="game"></canvas>
<script>
//start vars
var canvas = document.getElementById('game');
var context = canvas.getContext('2d');

var Score = 0;
var highScore = 0;

//ALS JE EEN VAST AANTAL BLOKJES IN JE CANVAS WIL, KAN JE DE CANVAS WIDTH/AANTAL BLOKJE DOEN.
//ZO KAN JE NAMELIJK OOK DE CANVAS IN GROOTTE VERANDEREN
var grid = 16;
var count = 0;

var snake = {
  x: 160,
  y: 160,

  dx: grid,
  dy: 0,

  cells: [],

  maxCells: 4
};

var apple = {
  x: 320,
  y: 320
};

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function loop() {
  //recusief, dus blijft doorgaan
  requestAnimationFrame(loop);

  if (++count < 4) {
    return;
  }

  count = 0;
  context.clearRect(0,0,canvas.width,canvas.height);


//in de righting bewegen
  snake.x += snake.dx;
  snake.y += snake.dy;


//aan de andere kant weer in het scherm komen
  if (snake.x < 0) {
    snake.x = canvas.width - grid;
  }
  else if (snake.x >= canvas.width) {
    snake.x = 0;
  }

  if (snake.y < 0) {
    snake.y = canvas.height - grid;
  }
  else if (snake.y >= canvas.height) {
    snake.y = 0;
  }

// voorkant toevoegen
  snake.cells.unshift({x: snake.x, y: snake.y});
// achterkant weghalen
  if (snake.cells.length > snake.maxCells) {
    snake.cells.pop();
  }
//appel laten zien
  context.fillStyle = 'red';
  context.fillRect(apple.x, apple.y, grid-1, grid-1);

//elk blokje van slang laten zien
//MISSCHIEN ZOUDEN WE DE KOP EEN ANDERE KLEUR KUNNEN GEVEN?
  context.fillStyle = 'green';
  snake.cells.forEach(function(cell, index) {
    // het blokje kleuren
    context.fillRect(cell.x, cell.y, grid-1, grid-1);

    // als er een appel gegeten is
    if (cell.x === apple.x && cell.y === apple.y) {
      snake.maxCells++;

      //score updaten en laten zien
	    Score++;
	    document.getElementById("score").innerHTML = "Score: " + Score;
      // appel een nieuwe plek geven
      apple.x = getRandomInt(0, 25) * grid;
      apple.y = getRandomInt(0, 25) * grid;
    }

    // kijken of je dood bent
    for (var i = index + 1; i < snake.cells.length; i++) {

      if (cell.x === snake.cells[i].x && cell.y === snake.cells[i].y) {

        //restart het spel, omdat je af bent
        snake.x = 160;
        snake.y = 160;
        snake.cells = [];
        snake.maxCells = 4;
        snake.dx = grid;
        snake.dy = 0;

        //highscore updaten zo nodig
        //misschien een overal highscore/leaderboard maken?   -> HANDIG:   window.prompt() OF prompt() OM DE NAAM TE KRIJGEN
    		if (Score > highScore){
    			highScore = Score;
    			document.getElementById("highScore").innerHTML = "Highscore: " + Score;
    		}

    		Score = 0;
    		document.getElementById("score").innerHTML = "Score: " + Score;

        apple.x = getRandomInt(0, 25) * grid;
        apple.y = getRandomInt(0, 25) * grid;
        }
    }
  });


}

// als je een knop indrukt
document.addEventListener('keydown', function(e) {

  if (e.which === 37 && snake.dx === 0) {
    snake.dx = -grid;
    snake.dy = 0;
  }
  else if (e.which === 38 && snake.dy === 0) {
    snake.dy = -grid;
    snake.dx = 0;
  }
  else if (e.which === 39 && snake.dx === 0) {
    snake.dx = grid;
    snake.dy = 0;
  }
  else if (e.which === 40 && snake.dy === 0) {
    snake.dy = grid;
    snake.dx = 0;
  }
});

requestAnimationFrame(loop);
</script>
</body>
</html>
