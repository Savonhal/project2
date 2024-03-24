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
            <h3>The Dragon's Silhouette :</h3>
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
            <p>The dragon that stole Pog's orb. Apparently if it wasn't for this dragon, the troll from earlier would've much more fearsome opponent.</p>
            <p>"Pog's voice tends to quake a bit when the topic of this dragon is brought up. Is it fear? Anger? or maybe he knows more than he is letting on?"</p>
        </div>
        <div class="textbox forest1">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P1)</h2>
            <h4>
               "The Draconian Woodlands are home to a myriad of flora and fauna, each species intricately woven into the tapestry of life that thrives within its depths.
                Towering trees reach towards the sky, their gnarled branches forming a labyrinthine canopy that stretches as far as the eye can see.
                But beneath the tranquil facade of the forest lies a realm of hidden dangers and ancient mysteries."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/yume.mp3" type="audio/mpeg">
            </audio>
            <p>
                As Pog and the player venture deeper into the heart of the Draconian Woodlands, the dense canopy above casts a dappled pattern of shadows upon the forest floor. 
                The air is thick with the heady scent of earth and moss, and the sound of rustling leaves fills the tranquil silence of the woodland realm.
                Pog's usually jovial demeanor takes on a more somber tone. Sensing the player's curiosity, he clears his throat and begins to speak, his voice tinged with a hint of regret.
            </p>
            <p>
                "Ya see, mate," Pog begins, his eyes scanning the dense undergrowth for any signs of danger, "that troll back there wasn't always in such a sorry state. No, sir. 
                He used to be a right proper guardian, he did. Protected that treasure cache like it was his own kin."
                Pausing for a moment, Pog's gaze drifts to the flickering torchlight dancing upon the forest floor. "But then, one day, things took a turn for the worse. 
                There was a confrontation, ya see. Between the troll and a fire dragon. If it wasn't for the dragon, the troll losing its composure, and you consuming those goodies, that last battle might not have ended very well for the both of us."
                At the mention of the fire dragon, Pog's voice drops to a hushed whisper, as if afraid of attracting the attention of unseen ears. "The dragon, he... he badly burnt the troll, he did. Sent him scurrying off into the shadows like a frightened mouse. 
                Poor bloke never stood a chance against the might of those flames."
            </p>
            <p>
                "And that's not all," Pog continues, his voice trembling with a mixture of fear and anger. "The fire dragon, he... he raided the treasure cache. Looking for something, he was. Something he thought was his."
                Leaning in closer to the player, Pog's eyes gleam with a steely determination. "He took something from me, mate. Something I can't afford to lose. My orb. The key to everything. 
                And I'll be damned if I let that scaly bastard get away with it."
            </p>
            <p>
                As they press forward, their senses attuned to the subtle rhythms of the forest, they come upon a fork in the path, each direction shrouded in an aura of mystery and possibility. 
            </p>
            <ul>
                <li><a href="">Explore the unknown</a></li>
                <li><a href="">Explore the unknown</a></li>
                <li><a href="">Explore the unknown</a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"That dragon is definitey near the Divine Draconian Peaks. Once we get my orb, I'll help ya sort things out with the rest of stuff at the Divine Draconian Peaks."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>