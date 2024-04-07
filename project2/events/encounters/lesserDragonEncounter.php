<?php 

    session_start();

    require '../showStats2.php';
    require '../heal/rest.php';



    function encounter(){
        $monster = [
            "name" => "Lesser Dragon",
            "hp" => 100 + round($_SESSION['player']['atk']*.3),
            "maxHP" => 100 + round($_SESSION['player']['atk']*.3),
            "atk" => 50 + round($_SESSION['player']['atk']*.1),
            "def" => 45 + round($_SESSION['player']['atk']*.2),
            "spd" => 85 + round($_SESSION['player']['atk']*.6),
            "monExp" => 320,
        ];
        echo"
        <div class='enemyStats tooltip'>
            <img class='enemyAnim1' src='../../images/enemy/lesser_dragon.jpg' style='width:200px;length:150px'alt='lesser_dragon picture'>
            <div class='right'>
                <h2>Lesser Dragon</h2>
                <h5>'Unlike their other kin, Lesser Dragons lack the intelligence that would qualify them as a sapient race. As such many other dragons view them no differently from other animals'</h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
            </div>
        </div>
        <img  class='enemyAnim' src='../../images/enemy/lesser_dragon.jpg' style='width:200px;length:150px'alt='lesser_dragon picture'>
        <img  class='enemyAnim' src='../../images/enemy/lesser_dragon.jpg' style='width:200px;length:150px;position:relative; left:70px;'alt='lesser_dragon picture'>
        ";
        echo'<p>
            "Stay sharp, these creatures may seem small compared to the dragons of legend, but their claws and teeth are still sharp enough to tear through steel."
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
    <title>Lesser Dragon Encounter</title>
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
        <h3>Encounter:</h3>
            <?= encounter() ?>
             
            
        </div>

        <div class="textbox peaks1">
            <h2>Encounter with Lesser Dragons</h2>
            
            <h4>
                "Their intelligence, while limited compared to other dragons, is nonetheless keen enough to recognize threats and devise simple strategies to overcome them. They are cunning hunters, capable of tracking prey across vast distances and coordinating attacks with their brethren."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/norowaretayakata.mp3" type="audio/mpeg">
            </audio>
            <p>
                As the you and Seiryu ascend the rugged terrain at the base of the Divine Draconian Peaks, the air grows thin and crisp, carrying with it the scent of pine and snow. Towering cliffs loom overhead, their jagged peaks obscured by swirling clouds that cling to their summits like wisps of silver.
            </p>
            <p>
                Seiryu, his voice tinged with a hint of reverence, explains the significance of their surroundings. 
                "These peaks," he begins, gesturing toward the imposing mountains that rise before them, "are said to be the dwelling place of the Dragon Gods themselves. Legends speak of their power and majesty, of the secrets they guard within their ancient halls."
            </p>
            <p>
                The landscape is a study in contrasts, with lush forests giving way to barren slopes of scree and rock. 
                Waterfalls cascade down the mountainsides, their crystalline waters carving deep gorges into the earth below. Here and there, patches of vibrant alpine meadows dot the landscape, their colors a stark contrast to the rugged terrain.
            </p>
            <p>
                As they journey deeper into the heart of the mountains, the air grows colder and the terrain more treacherous. The ground becomes strewn with loose rocks and boulders, making each step a precarious balance between strength and agility.
            </p>

            <p>
                Suddenly, a low rumble echoes through the valley, causing Seiryu to tense with anticipation. 
                "Be on your guard," he warns, his eyes scanning the surrounding cliffs for any sign of movement. "We are not alone in these mountains. The blessing from Cernunnos keeps away weaker and cowardly monsters but to the dragons of this peaks, they might see it as a challenge."
            </p>
            <p>
                Moments later, a small group of lesser dragons emerges from the shadows of the cliffs, their scales gleaming in the sunlight. With a mixture of curiosity and hostility, they eye the player and Seiryu, their primal instincts urging them to defend their territory.
            </p>
            
            <p>
                Seiryu meets their gaze with a mixture of respect and caution, his hand resting on the hilt of his sword. "Stay close," he whispers to the player, his voice low and urgent. "These creatures may not be as powerful as their larger kin, but they are formidable foes nonetheless."
            </p>

        
            <ul>
                <li><a href="../battleOutcome/lesserDragonOutcome.php">You ready yourself for battle.</a></li>
            </ul>   
        </div>

        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pog' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"Celestial Dragon Seiryu, Guardian of the Divine Draconian Peaks. 
                        He serves his lord, the Dragon God Bahamut, and protects the realm of the Divine Draconian Peaks alongside its other guardians.
                        After returning from the Divine Convention and parting ways with his lord, a rebellion sparked and forces Seiryu to make an ultimatum.
                        He shoulders the weight of his decision to this very day."
                    </h5>
                    <p>"Uggh not these flying rats. The last time a group of these flew ny estate, they shat all over the roof."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>