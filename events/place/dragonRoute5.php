<?php 
    //left side of dragonRoute1 outcome
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
    <title>Divine Draconian Peaks</title>
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
        <h3>Encounter :</h3>
            <div class='enemyStats tooltip'>
                <img src='../../images/enemy/dragon_shadow.png' style='width:300px;length:150px'alt='dragon picture'>
                <div class='right'>
                    <h2>???</h2>
                    <h5>"Thief who stole Pog's orb"</h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ???</p>
                    <p><img src='../../images/icons/katana.png'>Attack: ???</p>
                    <p><img src='../../images/icons/shield.png'>Defense: ???</p>
                    <p><img src='../../images/icons/sprint.png'>Speed: ???</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                </div>
            </div>
            <p>"Seiryu can sense the orbs presence and track it down. That explains how he was abel to find it in the underworld. But the orb is suddenly coming towards us?"</p>
            
        
        </div>
        <div class="textbox peaks1">
            <h2>To the Divine Draconian Peaks: On the Divine Draconian Peaks (P4)</h2>
            <h2>A Journey to retrieve the Orb</h2>
            <h4>
                The Divine Draconian Peaks rise majestically from the earth, their towering forms reaching towards the heavens with an awe-inspiring grandeur. 
                Jagged cliffs of rugged stone jut out from the verdant landscape below, their sheer faces weathered by the passage of time and the elements. 
                Tendrils of mist cling to the slopes, swirling in ghostly wisps around the ancient peaks like ethereal guardians of the realm.
                The slopes of the peaks are cloaked in a tapestry of emerald foliage, dotted with cascading waterfalls that tumble down into hidden grottos below. 
                Thick forests cling to the mountainsides, their vibrant hues a stark contrast to the stark stone that forms the backbone of the peaks.
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/akinoayumi.mp3" type="audio/mpeg">
            </audio>
            <p>As you and Seiryu trek through the rugged landscape of the Divine Draconian Peaks, you can't help but feel a sense of unease settling over you. 
                The towering cliffs and jagged peaks loom overhead, casting long shadows that seem to dance in the shifting light.
                Rugged terrain, as far a the eye can see, stretches out before you, jagged cliffs and steep ravines carving a labyrinthine maze through the mountains.
                
            </p>
            <p>
                You follow Seiryu's lead, trusting in his instincts to guide you to your destination. 
                Yet, as you wander aimlessly through the maze-like terrain, you can't shake the feeling of being lost in the vast expanse of the mountains.
                Turning to Seiryu, you voice your concern and ask him if he knows where he is taking them.
                Seiryu's gaze remains fixed on the path ahead, his expression unreadable. "I can feel the presence of the orb," he replies quietly. 
                "It calls out to me, guiding me to its location. Its how I was able to track it down the last time."
            </p>
            <p>
                Suddenly, a ripple of energy courses through the air, sending a shiver down your spine. 
                Seiryu's eyes widen in alarm, his gaze fixed on the horizon as a dark cloud begins to form on the distant horizon. 
            </p>
            <p>
                "It's moving," he says, his voice tinged with urgency. "And it's not alone."
            </p>
            <p>
                The orb, previously static and unmoving, begins to stir, its radiant energy pulsating with a newfound intensity. 
                Alongside it, a sinister presence begins to coalesce, casting a dark shadow over the surrounding landscape.
            </p>
            <p>
                As the sinister presence draws nearer, you can feel the hairs on the back of your neck standing on end, a primal instinct urging you to flee. But Seiryu stands firm, his resolve unwavering as he prepares to confront whatever may come.
                Without a word, he gestures for you to ready yourself, steeling your resolve for whatever may lie ahead.
            </p>

            <ul>
                <li><a href="../encounters/falseCelestialEncounter.php">You look towards the sky.</a></li>
            </ul> 
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3_2' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"Celestial Dragon Seiryu, Guardian of the Divine Draconian Peaks. 
                        He serves his lord, the Dragon God Bahamut, and protects the realm of the Divine Draconian Peaks alongside its other guardians.
                        After returning from the Divine Convention and parting ways with his lord, a rebellion sparked and forces Seiryu to make an ultimatum.
                        He shoulders the weight of his decision to this very day."
                    </h5>
                    <p>"This feeling...I don't like this."</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>