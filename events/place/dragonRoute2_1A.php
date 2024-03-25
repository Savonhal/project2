<?php 

    session_start();

    require '../showStats2.php';
    

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
    <title>Draconian Woodlands (P1)</title>
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
            <div style="display:flex">
                <img src='../../images/encounters/greatInsect_worm.jpg' style='width:300px;length:150px'alt='worm picture'>
                <img src='../../images/encounters/greatInsectScopion.jpg' style='width:300px;length:150px'alt='scorpion picture'>
                <img src='../../images/encounters/greatInsectSpider.png' style='width:300px;length:150px'alt='spider picture'>
            </div>
            <p>The insects that inhabit the village are not mere beasts, but rather sentient beings with a keen intellect and a deep understanding of their surroundings. Under the watchful eye of the Lord of the Woods, they have flourished, building a society that is as complex and vibrant as any human settlement.</p>
            <p>
                For centuries, the Great Insect Village has thrived under the watchful eye of the Lord of the Woods, a powerful and enigmatic entity who holds dominion over the surrounding forest.
                Under the guidance of the Lord of the Woods, the villagers have flourished, transforming their humble nest into a thriving community that rivals even the grandest cities of Termina. 
                With the lord's wisdom and guidance, they have learned to harness the resources of the forest, building intricate networks of tunnels and bridges that connect every corner of their domain.
            </p>
        </div>
        <div class="textbox thicket">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1)</h2>
            <h2>Great Insect Village</h2>
            <h4>
                Nestled deep within the heart of the Draconian Woodlands lies the Great Insect Village, a sprawling metropolis that stands as a testament to the ingenuity and resilience of its unlikely inhabitants. Built amidst the tangled undergrowth and towering trees, the village bears more resemblance to a bustling city than a traditional insect colony, its streets alive with the hustle and bustle of daily life.
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/suitekinoodori.mp3" type="audio/mpeg">
            </audio>
            <p>
                As Pog and the player arrive at the edge of the giant insect nest, they are greeted by a scene unlike anything they've ever seen before. 
                The nest, more akin to a bustling village than a traditional insect colony, sprawls out before them in a chaotic tapestry of woven branches, glistening webs, and intricately carved tunnels.
            </p>
            <p>
                Everywhere they look, the denizens of the insect village bustle about their daily lives, their massive forms moving with surprising grace and precision. 
                Giant caterpillar-like worms weave through the streets, their segmented bodies writhing as they carry building materials and supplies. Giant scorpions stand guard at the entrances to the tunnels, their keen eyes scanning the horizon for signs of danger. 
                And towering above it all, the massive forms of giant tarantulas oversee the village from their lofty perches, their eight eyes glittering with intelligence and purpose.
            </p>
            <p>
                Pog's eyes widen in amazement as he takes in the scene before him. "Blimey, mate, would ya look at this place?" he exclaims, his voice filled with wonder. 
                "Last time I checked on these blokes, they were barely more than beasts, but now look at 'em! There's nothin' different between 'em and the other folk of Termina!"
            </p>
            <p>
                As they walk through the bustling streets of the insect village, Pog and the player are greeted by a cacophony of sights and sounds. 
                In one corner, a group of giant ants haggle over the price of silk with a passing trader, their high-pitched voices buzzing with excitement. Nearby, a pair of giant beetles engage in a friendly game of tug-of-war with a length of vine, their powerful mandibles clacking together in laughter. As they walk through the bustling streets of the insect village, Pog and the player are greeted by a cacophony of sights and sounds. In one corner, a group of giant ants haggle over the price of silk with a passing trader, their high-pitched voices buzzing with excitement. Nearby, a pair of giant beetles engage in a friendly game of tug-of-war with a length of vine, their powerful mandibles clacking together in laughter. And in the center of it all, the queen of the colony holds court, her regal presence commanding the respect of all who pass by.
            </p>
            <ul>
                <li><a href="../encounters/diamondMantis.php">But just as Pog and the player are about to leave the village, disaster strikes. </a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>""Never thought I'd see the day when giant bugs started actin' like proper folk. Guess ol' Leafy's been puttin' in some overtime with these critters.""p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>