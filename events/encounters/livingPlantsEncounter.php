<?php
    //left side of dragonRoute1
    session_start();
    require '../showStats2.php';

    

    function encounter(){
        $monster = [
            "name" => "Walking Bushes",
            "hp" => 70 + round($_SESSION['player']['atk']*.3),
            "maxHP" => 70 + round($_SESSION['player']['atk']*.3),
            "atk" => 3 + round($_SESSION['player']['atk']*.3),
            "def" => 15,
            "spd" => 40,
            "monExp" => 50,
        ];
        echo"
            <div class='enemyStats tooltip'>
                    <img class='enemyAnim2'src='../../images/enemy/walkingBush.jpg' style='width:200px;length:100px'alt='bush picture'>
                    <div class='right'>
                        <h2>".$monster['name']."</h2>
                        <h5>
                            'Strange plants that posses the ability to walk. 
                             Unlike other living plants like carnivorous man-eating plants, these plants lack a mouth and are surprisingly agile.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                    </div>
            </div>
            <img class='enemyAnim2'src='../../images/enemy/walkingBush.jpg' style='width:200px;length:100px'alt='bush picture'>
        ";
        echo'<p>
            Among living plant species, walking bushes possess the most complex method of locomotion. 
            With their canine like legs, these bushes can easily traverse their environment in search of nutrient dense areas to root themselves in. 
            Due to their efficiency and speed, their kind is rarely seen moving about unless the area they are is devoid of life and nutrients. 
            There are accounts where walking bushes will actively attempt to hunt prey if they are desperate enough for nutrition.
        </p>';
        echo'<p>
            "I\'ve seen some strange things in my time, but walking shrubbery? That\'s a new one." - Pog
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
        <div class="textbox forest2">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 2)</h2>
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
                You and Pog decide to go to the right.
                Traveling down the right fork of the Draconian Woodlands, Pog and you find yourselves enveloped in a dense canopy of ancient trees. The air is heavy with the scent of earth and moss, and the faint sounds of rustling leaves and distant wildlife echo through the forest.
            </p>
            <p>
                As you journey deeper into the woods, the foliage grows thicker, casting long shadows over the forest floor. The sunlight struggles to penetrate the dense canopy above, creating an eerie twilight atmosphere. Vines and creepers twist and entwine around the trees, creating a tangled labyrinth that stretches as far as the eye can see.
                Suddenly, you come upon a clearing surrounded by towering trees, where a group of peculiar creatures lies in wait.
                At first glance, they appear to be nothing more than ordinary bushes and roots. However, upon closer inspection, you realize that they are alive, their twisted forms moving with a strange, unnatural grace. 
                They are walking bushes. With their four sturdy legs and swaying branches, they seem to survey their surroundings with a curious intelligence.
            </p>
            <p>
                As you cautiously approach, the creatures suddenly spring to life, their limbs lashing out with surprising speed and agility.
                "I've seen my fair share of oddities in these woods, but walking bushes and roots? That's a new one."
                As the living plant creatures spring into action, Pog's eyes widen in surprise and concern. "Well, this is unexpected," he mutters, shifting his stance to prepare for the coming onslaught. 
                "I've seen my fair share of oddities in these woods, but walking bushes and roots? That's a new one." 
            </p>
            
            <p> </p>
            <a href='../battleOutcome/livingPlantsOutcome.php'><p>With a nod from Pog, you ready your weapon, knowing that this encounter could turn deadly at any moment.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"I'm use to treants and the like and but his? Walking bushes and roots? Thats a first."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>