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
    <title>Divine Draconian Peaks </title>
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
        <h3>Daughter of Seiryu, Sansara</h3>
            <div class='enemyStats tooltip'>
                <img src='../../images/encounters/Sansara.png' style='width:300px;length:100px'alt='sansara? picture'>
                <div class='right' style='left:250px'>
                    <h2>Sansara</h2>
                    <h5></h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ???</p>
                    <p><img src='../../images/icons/katana.png'>Attack: ???</p>
                    <p><img src='../../images/icons/shield.png'>Defense: ???</p>
                    <p><img src='../../images/icons/sprint.png'>Speed: ???</p>
                </div>
            </div>
            <p> 
                Born in the depths of the underworld, Sansara's early years were shrouded in darkness and mystery. 
                Raised in the shadow of her father's legacy, she inherited both the celestial powers of her dragon heritage and the resilience of her undead lineage. 
                From a young age, Sansara's path was fraught with challenges, each one testing her resolve and shaping her destiny.
            </p>
            <p>
                In battle, Sansara is a force to be reckoned with, wielding both the potent magic and strength of the celestial dragons and the dark powers of the underworld with equal skill. 
                Her staff, a conduit for her otherworldly abilities, crackles with ethereal energy as she unleashes devastating spells upon her foes. 
            </p>
            <p>
                "Well, look who decided to join the party! You always did have a knack for showing up at just the right moment." - Seiryu
            </p>
            
        </div>

        <div class="textbox peaks1">
            <h2>On the Divine Draconian Peaks </h2>
            <h2>Encounter with the Stranger</h2>
            <h4>
                As the dust settles and the echoes of battle fade into the distance, the mysterious stranger steps forward, their presence commanding attention amid the aftermath of the fierce conflict.
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/akinoayumi.mp3" type="audio/mpeg">
            </audio>
            <p> 
                As they draw closer, you can make out their appearance more clearly than when they made their dramatic entrance earlier in battle.
                It is then that you realize the mysterious stranger is a woman. Despite the chaos that surrounds you, there is a sense of calmness and serenity that seems to emanate from her very being. 
                Donned in a light purple attire composed of armor and a robe, the stranger with the odd staff stands before you with an air of quiet confidence. 
            </p>
            <p>
                With a graceful bow, she introduces herself, "I am Sansara," she begins, her voice soft yet firm. "Half Celestial Dragon, half Undying, and daughter of Seiryu."
                As her words hang in the air, you can't help but feel a sense of awe wash over you. So this is Seiryu's daughter? With this level of power, it no wonder that Seiryu wasn't worried about her when they got separated.
                You introduce yourself and how you came to meet Seiryu and your adventure thus far.
            </p>
            <p>
                Sansara's eyes sparkle with intrigue as she listens to your tale, her gaze alighting upon you with a newfound sense of curiosity. "Ah, so you are the one whom Cernunnos has blessed," she remarks, a note of admiration in her voice.
                "Aria had mentioned something like this when I passed through New Havenwood". According to Sansara, she had emerged from the underworld somewhere near New Havenwood around the time when you and Seiryu departed from Cernunnos. 
                It was there where she was informed by Aria that her father and his companion had left for the Divine Draconian Peaks.
            </p>
            <p>
                "I have been searching for my father, hoping to reunite with him after our separation. When I learned of his journey to the peaks, I knew I had to follow. And it was a good thing that I did."
                You listen intently as Sansara recounts her journey, her urgency evident in every word she speaks. 
                "Sometime afterwards, after arriving on the mountain range, I felt an unnatural disturbance on the peaks," Sansara explains, her voice growing more intense with each passing moment. "I rushed as fast as I could to the source. 
                That's when I saw you battling with that False Celestial Dragon and the rest is history."
                As Sansara speaks, you can't help but feel a sense of gratitude for her timely intervention, her presence a beacon of hope in the midst of chaos.
            </p>
            <p>
                "I was surprised to learn that father didn't wait for me, but it seems like I know the reason why." 
                Sansara continues,her tone changing, her gaze piercing as she locks eyes with you. In that moment, you can feel her inspecting your soul, searching for the truth that lies within.
            </p>
            <p>
                "I don't know how you came to know my father or where you came from," Sansara says, her voice softening with understanding, "but if father has placed his trust in you for this long, then I guess I could too."
            </p>
            <p>
                As Sansara accepts you for being Seiryu's companion, you turn to Seiryu who is deep in thought, with eyes closed and focused on the orb that sits on top of his head. An occasional burst of magic could be felt from him as his pot like visage pulsates.
                According to Sansara, Seiryu is currently focusing on the orb in order to break his curse and return back to his original form.
            </p>
            <p>
                For now you sit next to a campfire and rest for the night as Sansara watches over you and her father for the night.
            </p>
            
            <ul>
                <li><a href="../encounters/seiryuTrueEncounter.php">You wake up in the morning</a></li>
            </ul>   
        </div>

        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img src='../../images/encounters/Pot of Cavil A.png' style='width:100px;'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"It seems like Seiryu is focusing on his orb right now."
                    </h5>
                    <p>"....."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>