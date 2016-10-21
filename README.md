# QuikPik

QuikPik: A brain game consists of moving and colliding answer bubbles, users will have to follow the instructions and
         pick the correct bubbles.

Motivation: This game is designed for training users' attention to details and reaction speed.

Bubble movement:
  The bubble movement for this game was taken from:
  http://gamedevelopment.tutsplus.com/tutorials/when-worlds-collide-simulating-circle-circle-collisions--gamedev-769 . 

Installation
  Directories:
    gamesound: stores mp3 files of game music
    images: stores bubbles, button images and other components of the game
    Javascript: stores all the js files
    Php: stores all the php files.
    Test: our testing files which allows us to do our temporary testing.

  CSS:
    score.css: styles the scoreboard.
    style.css: styles for button and other components on the canvas.

  Javascript:
    bubbles.js: Creates the bubble object along with its states.
    drawEachStage.js: Draws on the components on canvas for each stages.
    levelOne.js: Functions required to make sure level one behave properly.
    levelTwo.js: Functions required to make sure level two behave properly.
    levelThree.js: Functions required to make sure level three behave properly.
    levelFour.js: Functions required to make sure level four behave properly.
    levelFive.js: Functions required to make sure level five behave properly.
    tutorial.js: Creates the tutorial for users.
    sound.js: Sound function to play and stop the sound.

  Php:
    index.php: Our temporary main file to run the game.
    savescores.php: used https://www.scirra.com/tutorials/4839/creating-your-own-leaderboard-highscores-easy-and-free-php-mysql/page-3 
      to grab code for our scoreboard.
    leader.php: formats the scores to a HTML table.

Week #3 Weekly Challenge: 3 unlockable content:
  #1: Increment of a heart if lives are less than 3 or extra points if hearts are equal to 3.
  #2: 300 bonus points awarded if you clear stage 10 with 3 hearts remaining.
  #3: Upon clear level 10, a bonus stage is unlocked.
  


