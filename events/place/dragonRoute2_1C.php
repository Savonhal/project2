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
            <h3>A Gruesome Feast:</h3>
            <div>
                <img class='enemyAnim3' src="../../images/enemy/greatInsectSpider.png" style='width:200px; ' alt="spider">
                <img class='enemyAnim3_2' src="../../images/enemy/greatInsectSpider.png" style='width:200px; position:relative; top:150px; z-index:1' alt="spider">
            </div>
            <div class='enemyAnim5'>
                <img class='' src="../../images/enemy/greatInsect_worm.png" style='width:300px;transform:rotate(90deg); margin-left:50px; margin-top:-120px;' alt="spider">
            </div>
            <p>
                In the dense, shadowy depths of the Draconian woods, lurk the Giant Spiders, formidable predators that strike fear into the hearts of many. 
                These arachnids, descendants of a line that has endured for millennias, have adapted to thrive in the dark and treacherous terrain of their woodland domain.
            </p>
            <p>
                They posses a thick, hairy body that spans several feet in diameter. Their eight legs are strong and agile, allowing them to navigate the dense undergrowth with ease. 
                Covered in a coat of sleek, black fur, their presence is both eerie and menacing.
                Despite their formidable size and predatory prowess, Giant Spiders do not reign unchallenged in the Draconian Woods. 
                The presence of the Diamond Mantis, a fearsome apex predator, keeps their population in check, preventing them from becoming true apex predators themselves.
            </p>
        </div>

        <div class="textbox thicket">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1)</h2>
            <h2>Hunt for the Diamond Mantis</h2>
            <h4>
               "The Draconian Woodlands are home to a myriad of flora and fauna, each species intricately woven into the tapestry of life that thrives within its depths.
                Towering trees reach towards the sky, their gnarled branches forming a labyrinthine canopy that stretches as far as the eye can see.
                But beneath the tranquil facade of the forest lies a realm of hidden dangers and ancient mysteries."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/norowaretayakata.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                The air is heavy with anticipation as you make your way through the shadowy forest, the faint sounds of the village gradually fading into the distance behind you.
                Pog leads the way, his eyes darting keenly from side to side as he navigates the winding path
            </p>

            <p>
                You follow close behind, your senses heightened as you keep a watchful eye on your surroundings. Every rustle of leaves or snap of twigs sets your heart racing, the anticipation of the impending battle thrumming through your veins.
                Suddenly, Pog comes to a halt, signaling up his handle to signal for you to stop. He crouches down low, his gaze fixed intently on something ahead. Following his lead, you peer through the foliage and stumble upon a gruesome sight.
                Before them lay the writhing body of a Giant Worm, its bloated form twisting and mangled with two massive spiders are hunched over it. The spiders, each the size of a small carriage, wasted no time in sinking their fangs into the worm's flesh, tearing away chunks of meat with savage relish. 
                Their eight legs, long and sinewy, move with eerie precision as they tear into the flesh of their meal.
                Their abdomens, swollen with the spoils of their feast, pulsed rhythmically with each movement.
            </p>

            <p>
                Pog grimaces in disgust, his features contorting into a mask of disdain as he surveys the scene. "Looks like we've stumbled upon a feast," he mutters, his voice tinged with unease. "Best not to disturb them.
            </p>


            <ul>
                <li><a href="../encounters/diamondMantisEncounter.php">But their feast was short-lived</a></li>
            </ul>   
        </div>

        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Crikey, talk about nature's circle of life. Not exactly a picnic, is it?"</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>