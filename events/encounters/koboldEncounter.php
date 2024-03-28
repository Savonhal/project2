<?php
    //left side of dragonRoute1
    session_start();
    require '../showStats2.php';

    

    function encounter(){
        $monster = [
            "name" => "Kobold",
            "hp" => 70 + round($_SESSION['player']['atk']*.3),
            "maxHP" => 70 + round($_SESSION['player']['atk']*.3),
            "atk" => 10 + round($_SESSION['player']['atk']*.5),
            "def" => 10,
            "spd" => 30,
            "monExp" => 50,
        ];
        echo"
            <div class='enemyStats tooltip'>
                    <img class='enemyAnim2'src='../../images/enemy/kobold.jpg' style='width:200px;length:100px'alt='kobold picture'>
                    <div class='right'>
                        <h2>".$monster['name']."</h2>
                        <h5>
                            'To encounter a kobold is to dance with danger, for they are not creatures of brute force but of guile. 
                            These diminutive creatures, often underestimated by the unwary, are the cunning survivors of the forest of Termina.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                    </div>
            </div>
            <img class='enemyAnim2' src='../../images/enemy/kobold.jpg' style='width:200px;length:100px'alt='kobold picture'>
        ";
        echo'<p>
            "Watch out for those little buggers! They may be small, but they\'re crafty little devils. You ever seen one try to pick a lock? It\'s like watchin\' a monkey try to solve a puzzle!"
        </p>';
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
    <title>Kobold Encounter</title>
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
        <div class="textbox thicket">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 1)</h2>
            <h4>
               "The Draconian Woodlands are home to a myriad of flora and fauna, each species intricately woven into the tapestry of life that thrives within its depths.
                Towering trees reach towards the sky, their gnarled branches forming a labyrinthine canopy that stretches as far as the eye can see.
                But beneath the tranquil facade of the forest lies a realm of hidden dangers and ancient mysteries."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='../../music/suitekinoodori.mp3'>
            </audio>
            <p>
                You and Pog decide to go to the left.
                As Pog and you navigate through the dense underbrush of the forest, you suddenly find yourselves confronted by not one, but two small figures emerging from the shadows. 
                They are kobolds, their eyes gleaming with a feral intensity as they fix their gazes upon you.
            </p>
            <p>
                With snarls of aggression, the kobolds ready themselves for battle, their stances poised for attack as they prepare to defend their territory against intruders. 
                Sensing the tension in the air, Pog steps forward, his eyes narrowing as he sizes up your diminutive foes.
            </p>
            <p>
                "Well, well, well," Pog says with a smirk, his voice dripping with sarcasm. 
                "Looks like we've got a pair of kobolds on our hands. What's the matter, little fellas? Lost your way from the playground?"
            </p>
            
            <p>Ignoring Pog's taunts, the kobolds bare their teeth in menacing snarls, their claws twitching with anticipation as they prepare to strike. </p>
            <a href='../battleOutcome/koboldOutcome.php'><p>With a nod from Pog, you ready your weapon, knowing that this encounter could turn deadly at any moment.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Dragonic Peaks but for what purpose?"</h5>
                    <p>"Kobolds? Ha! Nothing but glorified rats, they are! Can't swing a sword to save their scaly hides."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>