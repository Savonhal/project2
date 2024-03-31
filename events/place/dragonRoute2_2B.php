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
    <title>Aria and Elara</title>
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
            <div style='display:flex'>
                <div class='enemyStats tooltip'>
                    <img class='enemyAnim1' src="../../images/encounters/Aria.png" style='width:200px;' alt="undying mage">
                    <div class='bottom' style='top: 175px; left: 100px;'>
                        <h2>Aria</h2>
                        <h5>"Emissary of the Lord of the Woods"</h5>
                        <p>"The right hand fae of the Lord of the Woods. She is responsible for many tasks in and out of Havenwood."</p>
                    </div>
                </div>
                <div class='enemyStats tooltip'>
                    <img src="../../images/encounters/Elara.png" style='width:200px;' alt="undying mage">
                    <div class='bottom' style='top: 175px; left: 100px;'>
                        <h2>Elara</h2>
                        <h5>"Attendant of Aria"</h5>
                        <p>
                            "An Undying who helps Aria with her duties. Her ability to commune with the wisps and sprites have been the saving grace for many who live in the Draconian woodlands."
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="textbox ghost_town">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 2)</h2>
            <h2>Old Havenwood</h2>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='../../music/seishishitauchu.mp3'>
            </audio>
            <p>
                As the echoes of battle slowly dissipate, two enigmatic figures turn towards you and Pog and introduce themselves.
            </p>
            <p> 
                The first, adorned with delicate wings that shimmer with an ethereal glow with hues of dark purple and blue, steps gracefully into view. Her voice carries a haunting melody as she introduces herself, "I am Aria, an emissary of the lord of the forest," her words echoing with an melancholic grace.
                Beside her, the other figure, cloaked in an aura of serenity, speaks next, "And I am Elara, a mere attendant to her emissary," her voice soft yet firm, a testament to her unwavering resolve.
            <p>
                With Aria and Elara's introductions complete, they reveal the purpose of their presence. "We were sent by the Lord of the Forest," Aria begins, her voice carrying a weight of solemnity, "at the request of Oakenheart." Elara nods in agreement, her expression serene yet resolute.
            </p>
            <p>
                "After sending you and Pog into the barrier surrounding Old Havenwood, Oakenheart realized where he recognized Pog," Aria explains, her gaze thoughtful. "He then contacted the Lord of the Woods to send us as emissaries, to aid you both in your endeavors."
            </p>
            <p>
                You inquire Pog about Oakenheart's recognition, prompting a quizzical look from your companion. "Oakenheart never personally knew me," Pog begins, his tone tinged with a hint of mystery. "But he recognizes my association with <span class='divine'>Cernunnos</span>, the Lord of the Woods."
                You nod, sensing there's more to the story than Pog lets on. His reluctance to delve deeper into the matter speaks volumes, but for now, you choose not to press further.
            </p>
            <p>
                There are more pressing matters at hand that require your attention, such as fulfilling their promise with Oakenheart and killing the Oni brothers.
                For now, you accept his explanation, content to focus on the task at hand with Aria and Elara by your side.
            </p>
            <p>
               After the battle, you and your allies decide to rest for up for the day.
            </p>
            <?= rest() ?>
            
            <a href='../place/dragonRoute2_2C.php'><p>You, Pog, Aria, and Elara continue exploring Old Havenwood.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Now that was a close call, those demons were tougher than I expected. With these two we might be able to take down those brothers."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>