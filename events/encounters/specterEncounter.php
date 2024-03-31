<?php 
    session_start();

    require '../showStats2.php';

    function encounter(){   
        $monster = [
            "name" => "Specter",
            "hp" => 75,
            "maxHP" => 75,
            "atk" => 9,
            "def" => 7,
            "spd" => 9,
            "monExp" => 100,
        ];    
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim'src='../../images/enemy/specter.jpg' style='width:200px;length:100px'alt='specter picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'These ethereal entities manifest as twisted echoes of their former selves, their spectral forms flickering with an eerie luminescence that pierces the darkness like a beacon of otherworldly dread.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
        ";
        echo"<p>
            'Driven by an insatiable hunger born of their unfulfilled desires or tragic demise, specters wander the shadowed paths of the world, their mournful cries echoing through the night like a lament for the lives they once knew.'
        </p>";
        

    }

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
    <title>Specter Encounter</title>
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
            <h3>Encounter:</h3>
            <?= encounter() ?>        
        </div>
        <div class="textbox ghost_town">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 2)</h2>
            <h2>Old Havenwood</h2>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='../../music/norowaretayakata.mp3'>
            </audio>
            
            <p> 
                Suddenly, a chill wind sweeps through the deserted village, carrying with it the mournful wails of the lost souls trapped within. Specters materialize from the darkness, their ethereal forms flickering like dying embers. Hollow eyes fixate on you and Pog with a silent, accusing gaze, as if blaming you for their eternal torment.
            </p>
            <p>
                With a sense of mounting dread, you realize that you are not alone in Old Havenwood. The spirits of the past linger here, bound to this forsaken place by an unbreakable curse. 
                As they draw nearer, their ghostly whispers fill the air, chilling you to the core with their haunting lamentations. In the heart of this ghostly realm, you and Pog stand as intruders in a world haunted by the sins of the past.
            </p>
            
            <a href='../battleOutcome/specterOutcome.php'><p>You prepare yourself for battle.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Gah! There's an undead here alright and its a specter!"</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>