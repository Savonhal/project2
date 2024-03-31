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
    <title>Draconian Woodlands (P2 2)</title>
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
            <h3>Target: Oni</h3>
            <div class='enemyStats tooltip'>
                    <img src='../../images/enemy/oni_shadow.png' style='width:250px;length:100px' alt='bush picture'>
                    <div class='right'>
                        <h2>Oni</h2>
                        <h5>
                            'Possessing immense physical strength and resilience, the Oni are formidable adversaries, capable of shrugging off even the most devastating of attacks. Their monstrous forms tower over their victims, instilling terror in all who dare to oppose them.'
                        </h5>
                    </div>
            </div>
            <p>
                Among the most feared of the Oni are the infamous Oni brothers, relentless hunters who stalk the shadows in search of souls to devour. With insatiable appetites for suffering and despair, these vile creatures take pleasure in tormenting their victims before feasting upon their essence. Their voices are like the rumble of distant thunder, their laughter a chilling echo of the darkness that dwells within them.
                Driven by an insatiable hunger for souls, they descended upon the village like vultures upon the carrion, their malevolent presence casting a pall of dread over the land. With savage ferocity, they tore through the streets, leaving nothing but death and destruction in their wake.
            </p>
            <p>"With your current strength, hunting down one Oni might be doable but two? We might need to take a step back and make a plan..." - Pog</p>         
        </div>
        <div class="textbox ghost_town">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 2)</h2>
            <h2>Old Havenwood</h2>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='../../music/yonseinomissa.mp3'>
            </audio>
            <h4>After The Battle with the Merged Hell</h4>
            <p>
                As the last wisp of the Merged Hell dissipates into the ether, leaving behind an eerie silence in its wake, Pog's eyes narrow as he observes you with a newfound intensity. He scratches his chin, the clinking of his ceramic form echoing softly in the quiet aftermath of the battle.
            <p>
                "Well, well, well," he muses, his voice tinged with a mix of curiosity and something akin to admiration. "Looks like you've been holding back on me, haven't you?"
                You shoot him a puzzled look, asking him what he means.
            </p>
            <p>
                Pog gestures emphatically toward you, his tone taking on a note of excitement. "I mean, did you feel that? Every time we take down one of these nasties, you're getting stronger. It's like you're soaking up their essence or somethin'."
            </p>
            <p>
                You take a moment to process his words, considering the implications of what he's saying. It's true that you've felt a surge of energy coursing through you with each battle, but you hadn't paid much attention to it until now.
            </p>
            <p>
                Pog nods, his eyes alight with a newfound determination. "Well, whatever it is, we'll need every advantage we can get if we're going to face those dragons on the Divine Draconian Peaks. And if that means you're becoming a bit of a powerhouse, then so be it."
            </p>
            <p>
                Pog chuckles, the tension of battle momentarily forgotten. "That's the spirit, mate. Now, let's see what else this forsaken place has in store for us." With renewed resolve, you and Pog press onward, searching for the pair of Oni brothers responsible for this town's state.
            </p>
            
            <a href='../encounters/demonGroupEncounter.php'><p>Continue your hunt</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"You've been getting stronger mate buts it a good thing if it means we can fight with the dragons on the Divine Draconian Peaks."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>