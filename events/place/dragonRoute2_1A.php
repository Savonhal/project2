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
                As Pog and the player approach the outskirts of Havenwood, a sense of trepidation hangs heavy in the air. The air thick with the scent of damp earth and decaying foliage, lends an eerie ambiance to the surroundings.
                Emerging from the depths of the forest, the settlement of Havenwood comes into view, nestled amidst the towering trees like a hidden oasis in the wilderness. Buildings constructed from weathered timber and woven vines rise from the forest floor, their structures blending seamlessly with the natural landscape. Lanterns fashioned from glowing fae crystals cast a soft, ethereal light upon the scene, illuminating the pathways and casting dancing shadows upon the walls.
            </p>
            <p>
                Despite the tranquility of its surroundings, there is an unmistakable air of resilience about Havenwood, a testament to the strength and determination of its inhabitants. The settlement bears the scars of its tumultuous history, with signs of recent construction interspersed with remnants of the past.
                Cracks mar the surfaces of some buildings, while others show signs of hasty repair, evidence of the hardships endured by its residents.
            </p>
            <p>
                As Pog and the player draw closer, they can see figures moving about the settlement, going about their daily tasks with a sense of purpose and determination. 
                Fairies flit through the air on delicate wings, while elves and members of the unique undead race bustle about, tending to crops, repairing structures, and engaging in lively conversation.
            </p>
            <p>
                Pog's brow furrows in curiosity as he observes the Undying moving seamlessly among the other residents of Havenwood. It strikes him as odd, considering their undead nature, but he quickly realizes that their presence may be connected to the broader unrest occurring in the Divine Draconian Peaks.
                With a thoughtful nod, Pog murmurs to the player, his voice tinged with intrigue, "Seems we've stumbled upon quite the melting pot of beings here, eh? But those Undying folk... They're a curious lot. Bet they've got stories to tell, especially with all the rumblings from the underworld and that rebellion up in the Peaks."
                He casts a lingering gaze over the settlement, pondering the implications of their presence amidst the tranquil surroundings of Havenwood.
            </p>
            <p>
                You and Pog decide to stay the night at an inn at the New Havenwood settlement. In the morning, You and Pog leave the inn and continue foward in your journey.
            </p>
            <?= rest()?>
            <ul>
                <li><a href="../encounters/diamondMantisEncounter.php">But just as Pog and the player leaves the inn, a fairy and an undying girl approaches you.</a></li>
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