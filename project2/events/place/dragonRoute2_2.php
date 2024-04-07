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
            <p>
                As you and Pog step through the barrier into Old Havenwood, a palpable sense of unease washes over you. The once vibrant village now lies in ruin, its dilapidated buildings shrouded in shadow and decay. Twisted vines snake their way through crumbling walls, and the air is heavy with the musty scent of ancient decay.
            <p>
                Old Havenwood unfolds before you like a dark, twisted tapestry woven from nightmares.
                The houses of Old Havenwood stand as hollow shells, their windows gaping like empty eye sockets, and their doors hanging askew on rusted hinges. Faded remnants of life linger in the air, a haunting echo of the village's former inhabitants. Ghostly whispers drift on the wind, carrying fragmented memories of laughter and sorrow.
                Shadows dance and sway with unnatural movements, casting sinister shapes upon the decaying structures.
                The cobblestone streets, once bustling with life, now echo with the haunting whispers of the past. A cold chill settles over the abandoned streets, seeping into your bones and sending shivers down your spine. The faint rustle of dead leaves echoes through the eerie stillness, accompanied by the distant creaking of ancient branches. 
                Every step forward feels like a descent into madness, as if the very fabric of reality is unraveling around you. Every creak of a floorboard, every rustle of leaves sends shivers down your spine, as if unseen eyes are watching your every move.
            </p>
            <p>
                The silence is oppressive, broken only by the occasional mournful howl of the wind. You can almost feel the weight of the sorrow that still lingers in the air pressing down upon you, it's as though the very essence of despair has seeped into the cracks of every building, staining everything it touches. It's as if the village itself is holding its breath, waiting for something... or someone.
            </p>
            
            <p>
                As you navigate the labyrinthine streets, a sense of dread gnaws at the edges of your consciousness. Every corner turned brings the possibility of encountering something unspeakable lurking in the shadows.
            </p>
            
            <a href='../encounters/specterEncounter.php'><p>Then suddenly....</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Ughh I can feel it. This place is oozing with the supernatural. Keep your guard up mate, it seems likes we got more things to worry about then a pair of oni."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>