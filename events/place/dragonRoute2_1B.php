<?php 

    session_start();

    require '../showStats2.php';
    require '../heal/rest.php';
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../textbox.css">
    <link rel="stylesheet" href="../../enemy.css">
    <link rel="stylesheet" href="../../encountersAnimation.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>New Havenwood Settlement </title>
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
        <div class="battleBox ">
            <h3> New Havenwood Settlement</h3>
           
            <p>
                For centuries, the Havenwood has thrived under the watchful eye of the Lord of the Woods, a powerful and enigmatic entity who holds dominion over the surrounding forest.
                But certain turn of events have led to the destruction of Havenwood before the Lord of the Woods could intervene. New Havenwood was contructed in a much more denser and remote area of the Draconian woodlands as a result.
                Despite its remote location, Havenwood is a bustling hub of activity, its streets alive with the sounds of laughter and conversation. 
                Fairies flit gracefully through the air, their colorful wings adding a splash of vibrancy to the verdant surroundings. 
                Elves move with silent grace among the trees, their keen eyes ever watchful for signs of trouble.
                But it is the presence of the Undying that truly sets Havenwood apart. These enigmatic beings no different from humans in both appearance and behavior, are touched by the veil of death yet bound to the mortal realm.
                Their unique magic, knowledge, and perspective have contributed much to Havenwood's community in the short time of 300 centuries since their arrival form the underworld. 
                "Their arrival only warranted the destuction of Old Havenwood" a common sentiment shared amongst those who hold prejudice against them.
            </p>
            <div style='displaye:flex'>
                <img src="../../images/encounters/undying_mage.jpg" style='width:200px;length:100px' alt="undying mage">
                <img src="../../images/encounters/undying_alchemist.jpg" style='width:200px;length:100px' alt="undying mage">
            </div>
            <p>
                Unlike other beings in Termina, they do not adhere to the traditional cycle of life and death. Instead, they are born into the world already touched by the veil of death, their existence marked by an eternal connection to the Termina's underworld where they originally belong.
                Physiologically, the Undying bear a striking resemblance to humans, elves, and other mortal races, possessing the same basic features and bodily functions. However, there are subtle differences that set them apart. Their skin often bears a pallid hue, as if touched by the chill of the grave, and their eyes may possess an otherworldly glow, hinting at the depths of their otherworldly nature.
                Despite their moniker, the Undying are not invulnerable to the ravages of existence. While they cannot perish from age, injuries and illnesses can send an Undying to its demise but while their bodies might wither and decay, their soul remains intact waiting for the right moment to once again manifest a new body. 
            </p>
        </div>
        <div class="textbox wood_village">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1)</h2>
            <h2>New Havenwood Settlement</h2>
            <h4>
                New Havenwood stands as a beacon of hope amidst the untamed wilderness of the Draconian Woods, its sturdy walls and tranquil surroundings offering sanctuary to those who seek refuge from the dangers of the forest.
                The settlement is nestled within a small clearing, surrounded by towering trees that seem to stretch endlessly towards the sky.
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/seishishitauchu.mp3" type="audio/mpeg">
            </audio>
            <p>
               
            </p>
            <p>

            </p>
            <p>

\            </p>
            <p>
            
            </p>
            <p>
                
            </p>
            <?= rest()?>
            <ul>
                <li><a href="../encounters/diamondMantisEncounter.php">But just as Pog and the player are about to leave the village, a fairy and an undying girl approaches you.</a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Hmm, those Undying folk... They've got a certain air about them, don't they? Almost nostalgic, in a way. Reminds me of..."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>