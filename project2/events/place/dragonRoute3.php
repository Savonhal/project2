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
    <title>Draconian Woodlands (P3)</title>
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
            <p>"It seems like Pog's orb is a key to undoing his transformation and returning his powers but wasn't it a Demon God who stole the orb?"</p>
        </div>

        <div class="textbox forest2">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P3)</h2>
            <h2>The Truth</h2>
            <h4>
               "The Draconian Woodlands are home to a myriad of flora and fauna, each species intricately woven into the tapestry of life that thrives within its depths.
                Towering trees reach towards the sky, their gnarled branches forming a labyrinthine canopy that stretches as far as the eye can see.
                But beneath the tranquil facade of the forest lies a realm of hidden dangers and ancient mysteries."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/akinoayumi.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                <span class="divine">"Seiryu"</span>...
            </p>
            <p>
                Turning to you, Seiryu,formerly known as Pog, takes in a deep breath as he steels himself before revealing the truth. 
                "Pog was but an alias, a veil to hide my true identity from those who would seek to harm me.
                "My true name is Seiryu, a celestial dragon of the Divine Draconian Peaks. Long ago, I stood as a guardian of the Dragon God, sworn to protect my divine realm from its enemies."
            </p>

            <p>
                He pauses, gathering his thoughts before continuing."I was once the loyal attendant of Bahamut, the Dragon God, entrusted with safeguarding him during our travels to the Divine Convention." 
                Seiryu reminisces, his voice tinged with nostalgia. "Our journey to the Divine Convention was meant to forge alliances and strengthen our position. 
                But upon our return, a rebellion  erupted on the Divine Draconian Peaks."
            </p>
            <p>
                Seiryu's gaze shifts to the distant horizon, lost in memories of turmoil and strife.
                "But when the rebellion erupted on the peaks, I had already seperated from my lord. In the heat of the moment, I was forced to make an ultimatum: protect my family or aid my lord in quelling the insurgents."
            </p>
            <p>
                "In the end, I choose my family". He sighs, the memory still haunting him. "I managed to save my daughter, but... I couldn't protect my wife. And as I rushed back to aid Bahamut, I was intercepted by a Demon God who stole my divine orb and twisted me into this accursed form.
                That's when I learned that the rebellion wasn't just a contained domestic issue. Somehow, the insurgents had outside help from some faction lurking in Termina's underworld."
            </p>

            <p>
                His eyes narrow with a mixture of suspicion and determination. "I don't have all the details, but I've been piecing together what I can. Someone down there is playing a dangerous game, and they've got their sights set on causing chaos in the Peaks."
                Seiryu's expression darkens as he reflects on the implications of this revelation. "So, yeah, kid. That's the mess I've been tangled up in."
            </p>
            <p>
                As you and Pog trek through the woods, the blessing of the Cernunnos has kept many of the monster who live in his domain from approaching you.
            </p>


            <ul>
                <li><a href="../place/dragonRoute4.php">You make your way to the edge of the Draconian Woodlands</a></li>
            </ul>   
        </div>

        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"Celestial Dragon Seiryu, Guardian of the Divine Draconian Peaks. 
                        He serves his lord, the Dragon God Bahamut, and protects the realm of the Divine Draconian Peaks alongside its other guardians.
                        After returning from the Divine Convention and parting ways with his lord, a rebellion sparked and forces Seiryu to make an ultimatum.
                        He shoulders the weight of his decision to this very day."
                    </h5>
                    <p>"Sorry about not telling ya my real name. Can't risk leaking my identity and being tracked down while looking like this..."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>