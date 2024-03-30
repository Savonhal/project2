<?php
    //left side of dragonRoute1
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
            <div class='enemyStats tooltip'>
                    <img src='../../images/encounters/Oakenheart.jpg' style='width:250px;length:100px'alt='bush picture'>
                    <div class='right'>
                        <h2>Oakenheart</h2>
                        <h5>
                            'Former guardian the original Havenwood, he was tasked by the Lord of the Woods to watch over the settlement. 
                            He now watches over the ruins and maintains the seal responsible for sealing away the forces that sent Old Havenwood to its demise.'
                        </h5>
                    </div>
            </div>
            <p>
                Roughly 400 years, Havenwood was attacked by a pair of Oni brothers and their group raided the village to acquire the souls of the new Undying residents. 
                With the help of Aria and her attendant, Oakenheart was able to seal away the invaders in a barrier and relocated the survivors to safety. 
                To this day, he has maintained his vows to watch over the sealed ruins and protects them from any forces seeking to free the underworld forces from within.
            </p>         
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
                Traveling down the right fork of the Draconian Woodlands, they find themselves enveloped in a dense canopy of ancient trees. The air is heavy with the scent of earth and moss, and the faint sounds of rustling leaves and distant wildlife echo through the forest.
            </p>
            <p>
                As you and Pog continue your journey through the dense forest, you notice a faint shimmering in the air ahead. Curious, you follow the ethereal sprites that materialize before you, their gentle glow illuminating the path through the verdant foliage.
            </p>
            <p>
                As the sprites guide you through the dense foliage, you eventually emerge into a small clearing, where a towering figure looms before you. It is an ancient treant, its massive form adorned with gnarled branches and sparse leaves. Despite its imposing presence, the treant exudes a sense of calmness and wisdom.
                The treant's wise eyes meet yours, and you can sense a profound sorrow emanating from its weathered form. "Welcome, travelers," it speaks in a deep, rumbling voice, each word heavy with the weight of centuries. "I am Oakenheart, once the guardian of Old Havenwood, now but a keeper of its ruins and the seal that envelops its."
                Pog, ever the curious, chimes in, "Oakheart, huh? So, what's the deal with this seal you're talking about? Sounds like some serious magic."
            </p>
            <p>
                Oakheart's branches sway gently in response to Pog's inquiry. "Indeed, young one," it replies, its voice carrying the weight of centuries. "Long ago, this land was home to a thriving settlement known as Old Havenwood. But tragedy befell our people when a pair of Oni brothers and their group from the underworld laid waste to our home."
                Pog's eyes widen with interest as Oakheart continues its tale. "In the aftermath of the destruction, I vowed to protect the remnants of Old Havenwood and prevent the malevolent forces within from escaping. Thus, I erected a barrier of magic to seal away the ruins, ensuring that the darkness would remain contained."
                Pog scratches his pot-like head in contemplation. "So, you're like the guardian of a ghost town, huh? That's pretty heavy stuff."
                Oakheart nods solemnly. "Indeed, young one. My duty weighs heavily upon me, but I bear it with honor and resolve."
            </p>
            
            <p> 
                As the conversation with Oakheart unfolds, you and Pog realize that you need to pass through the seal to reach your destination. Pog suggests this to Oakheart, but the treant hesitates, its ancient eyes filled with uncertainty.
                "I cannot simply allow passage through the seal," Oakheart rumbles, its voice tinged with concern. "The barrier exists to contain the darkness within Old Havenwood. To breach it would risk unleashing danger upon the Draconian woodlands."
                You and Pog exchange glances, understanding the gravity of the situation. But before you can respond, Oakheart peers deeply into your souls, its ancient gaze probing your very essence.
                After a moment of contemplation, the treant speaks again, its voice softer now. "If it is you who seeks passage, then perhaps there is hope yet. Your souls resonate with a strength and purity that I have not sensed in eons. 
                Especially yours talking pot Pog. It reminds me of someone but I can't put by branch on it."
            </p>
            <p>
                Pog nods in agreement, his expression resolute. "We'll take on the Oni brothers, Oakheart. Count on it."
                With a solemn nod, Oakheart relents, its branches parting to reveal the shimmering barrier of magic. "Very well," it intones. "Pass through the seal, but know that the path ahead will be fraught with peril. May your courage and determination light the way."
            </p>
            <p>
                Before you and Pog step through the barrier, Oakheart offers a moment of respite, its branches rustling gently in the breeze. In the tranquil embrace of the forest, you gather your strength, preparing for the challenges that lie ahead.
            </p>
            <?= rest() ?>
            <a href='../place/dragonRoute2_2.php'><p>You continue your journey through the seal the following day.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Ah, to be considered young again! Well, I'll take that as a compliment, I suppose. Keeps me feeling spry!"</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>