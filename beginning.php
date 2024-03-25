<?php
    session_start();

    require 'game_logic/createCharacter.php';
    require 'game_logic/showStats.php';
    
    //Creates a new character
    //If previous player did not die or win, then they will lose all previous progress and start anew
    createCharacter($_GET['name']);

    /*
    if(!isset($_SESSION['player']) && $_GET['name'] !=$_SESSION['player']['name']){
        createCharacter($_GET['name']);
    }
    */
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="textbox.css">
    <link rel="stylesheet" href="enemy.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>The Beginning</title>
    <style>
        h2{
            font-family: 'Cardo';
        }
        p{
            font-family: 'Crimson Text';
        }
    </style>
</head>
<body>
    <div class="termina">
        <h1>Termina's Lament</h1>
    </div>
    <div class="box">
        <div class="battleBox">
            <h3>Encounter :</h3>
            <img class="enemyAnim"src='images/player/sword.jpg' style="width:200px;height:150px">
            <img class="enemyAnim1"src='images/player/shield.jpg' style="width:200px;height:150px">
        </div>
        <div class="textbox forest3">
            <h2>Termina: The Beginning</h2>
            <h3>Intro Music:</h3>
            <audio controls loop autoplay>
                    <source src="music/akaifuusen.mp3" type="audio/mpeg">
            </audio>
            <p>
                In the desolate realm of Termina, you awaken to a world shrouded in darkness. Your memories are but fragmented whispers, lost amidst the echoing void that surrounds you.
                Desolation stretches out as far as the eye can see, a landscape marred by twisted shadows and jagged silhouettes clawing at the edges of your vision. 
            </p>
            <p>
                Barren and lifeless, the land lies beneath an indifferent sky, its soil cracked and parched from ages of neglect.
                A sense of dread coils within the pit of your stomach, its venomous whispers echoing through the recesses of your mind. You stand alone amidst the desolation, adrift in a sea of darkness and uncertainty, with no beacon to guide your way through the encroaching shadows.
                Instinctively, your fingers find purchase upon the worn hilt of a sword and the glistening surface of a shield. Though time has weathered these implements, they remain steadfast companions in this forsaken land.
            </p>
            <p>
                With these humble tools in hand, you stand ready to face the challenges that lie ahead. Your grip is firm, your resolve unyielding. Despite the odds stacked against you, you are determined to carve a path through the shadows, one swing of your sword and one deft parry of your shield at a time.
                In this forsaken place, what will you choose to do? 
            
            </p>
            <ul>
                <li><a href="explore.php">Explore the unknown</a></li>
            </ul>
          
        </div>
        <div class="stats">
            <?= showStats();?>
        </div>
    </div>
   
    <?php ?>
</body>
</html>