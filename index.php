<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="textbox.css">
    <link rel="stylesheet" href="index.css">
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
    <title>Document</title>
</head>
<body>
    <div class="termina">
        <h1>Termina's Lament</h1>
        <form action="beginning.php" method="GET">
            <label for="name">Enter your character's name:</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="Submit Name">
        </form>
    </div>
    <div class="box termina" >
        <div class="leaderBoard">
            <h2 style="margin-bottom: -10px;">LeaderBoard</h2>
            <?php include 'leaderBoard.php'?>
        </div>
        <div class="textbox void">
            <div class="intro">
                <h3>Opening Theme</h3>
                <audio controls autoplay="true" loop>
                    <source src="music/uminifuruyuki.mp3" type="audio/mpeg">
                </audio>
                <h1>What is Termina?</h1>
                <p>
                    In the vast expanse of the cosmos, there exists a realm beyond the reach of mortal comprehension: Termina, the world where forgotten concepts and fading echoes find their final resting place. 
                    It is a realm shrouded in mystery, where the remnants of forgotten civilizations and dying beliefs coalesce into a tapestry of myth and legend.
                </p>
                <p>
                    Within Termina, the very fabric of reality is shaped by the collective consciousness of sentient beings across the multiverse. 
                    As civilizations rise and fall, their beliefs and ideologies take root in this ethereal realm, giving rise to gods and entities that embody the essence of their faith.
                </p>
                <p>
                    At the heart of Termina lies the protagonist, an enigmatic entity whose true nature remains veiled in secrecy until they reach the end of their journey. 
                </p>
                <br>
                <h1>How do I play the game?</h1>
                <p>Enter a name and hit the submit button to start. Your decisions in the game can affect your journey in Termina and its outcome.</p>
                <p>The game has a heavy amount of story and lore.</p>
                <p>You can enable autoplay for sound on your browser to increase immersion.</p>
                <p>Hovering over enemies and allies can give you information such as lore and stats.</p>
                <p>The game contains a leveling system and stats that'll affect battles and progression. Battling is automatically done for you.</p>
                <p>Stats are randomized during character creation and their growth is randomized during level ups.</p>
                <h2> What do stats do? </h2>
                <ul>
                    <li>LVL: Your level; an indicator for your general strength and aptitude in battle. Increasing your LVL also increases your Max Health, Attack, Defense, and Speed. It will also heal you.</li>
                    <li>EXP: Experience; is needed to increase your LVL.</li>
                    <li>HP: Your health points; if your HP decreases to 0 or below you'll die.</li>
                    <li>Attack: Determines how much base damage you'll deal against enemies. </li>
                    <li>Defense: Reduces incoming damage from Attacks.</li>
                    <li>Speed: Determines who will go first every turn in battle.</li>
                </ul>
                <h1>What are the outcomes of the game?</h1>
                <p>The game has two routes (general stories) each with their own events that will eventually converge into a single route again.</p>
                <p>You get to pick the route when you reach a fork in the road in the Draconian woodlands.</p>
                <h2>Routes</h2>
                <ul>
                    <li>Left: New Havenwood and the Diamond Mantis</li>
                    <li>Right: Old Havenwood and the Oni Brothers, Akuma and Yuki </li>
                </ul>
            </div>
        </div>
        <div class="stats">
            <h2>Web Development Project 2</h2>
            <h2>Group 9</h2>
            <p>- Kamrul Tarafder</p>
            <p>- Dat Huynh</p>
            <p>- Triet Luu</p>
            <br>
            <img class="enemyAnim" src="images/player/sword.jpg" style="width:200px; height:150px; margin-left:-10px;" alt="sword">
        </div>
    </div>
   
    <p></p>
</body>
</html>


