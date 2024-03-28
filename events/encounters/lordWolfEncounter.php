<?php 

    session_start();

    require '../showStats2.php';

    function encounter(){
        echo"
            <div class='enemyStats tooltip'>
                <img class='enemyAnim1' src='../../images/encounters/lord_of_the_dracovian_woods_left.png' style='width:250px;length:100px'alt='wold picture'>
                    <div class='right'>
                        <h2>Lord of the Woods: <span class='divine'>Cernunnos</span></h2>
                        <h5>
                           'Known by many names but revered as Cernunnos, he is the Lord of the Woods, a deity whose presence spans the vast expanse of the woodland realm.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ?????</p>
                        <p><img src='../../images/icons/katana.png'>Attack: ?????</p>
                        <p><img src='../../images/icons/shield.png'>Defense: ?????</p>
                        <p><img src='../../images/icons/sprint.png'>Speed: ??????</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                    </div>
                </div>
            ";
        echo'<p>
            Legend speaks of Cernunnos as an entity born from the very essence of the forest itself, a manifestation of its primordial power and boundless vitality. Within his domain, he holds sway over the ebb and flow of life, presiding over the intricate tapestry of flora and fauna that call the Draconian Woods home.
            In matters of mortal strife or conflicts born of petty grievances, Cernunnos remains aloof, allowing the denizens of the forest to navigate their own destinies and forge their own paths. 
            It is only when the integrity of the Draconian Woods itself is threatened, or when the cosmic balance hangs in the balance, that he emerges from his verdant sanctuary to confront the forces of chaos and corruption that have invaded his domain.
        </p>';
        echo '<p>
            "I can get away with a bit of teasing since Cernunnos and I go way back. But you? You better keep those lips sealed tight unless you want to end up on his bad side. He\'s not as forgiving with newcomers." - Pog
        </p>';
    }

    function blessing(){
        $prevAtk = $_SESSION['player']['atk'] ;
        $_SESSION['player']['atk'] +=  round($_SESSION['player']['atk'] * 0.3);
        echo"<p>Attack: ".$prevAtk." -> ".$_SESSION['player']['atk']." </p>";

        $prevSpd = $_SESSION['player']['spd'];
        $_SESSION['player']['spd'] +=  round($_SESSION['player']['spd'] * 0.3);
        echo"<p>Speed: ".$prevSpd." -> ".$_SESSION['player']['spd']." </p>";
    }

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
    <title>Cernunnos Encounter</title>
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
            <h3>Encounter: </h3>
            <?= encounter() ?>
        </div>
        <div class="textbox thicket">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1)</h2>
            <h2><span class="divine">DIVINE ENCOUNTER: Cernunnos</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_encounter/heiannoyoi.mp3" type="audio/mpeg">
            </audio>
            <h4>
                As the echoes of battle fade into the forest's depths, a profound stillness descends upon the clearing. 
                Amidst the tranquil hush, your senses are suddenly assailed by a presence so potent, so inherently divine, that it seems to reverberate through every fiber of your being. Instinctively, your body reacts, an inexplicable sense of awe and reverence washing over you like a tide of overwhelming emotion. 
                Without a word spoken, you know that you stand in the presence of <span class="divine">Cernunnos, the Lord of the Draconian Woods</span>, his divine essence palpable even to mortal senses.
            </h4>
            <p>
                As Cernunnos approaches, his presence seems to suffuse the very air with an ancient power, and his eyes, wise beyond measure, fixate upon you and Pog. 
                With a glance that seems to penetrate to the very core of your being, he delves into the depths of your soul, causing an inexplicable sensation of discomfort to wash over you, as if your thoughts and memories were laid bare before him.
            </p>
                Satisfied with what he found, Cernunnos grants you his blessing. You feel the strength of the forest itself flowing through you. Your movements become effortless, your strikes fueled by the untamed energy of the wilderness.
            <p>
                You've recieved the Cernunnos's Blessing!
            </p>

            <?= blessing() ?>
            
            <p>
                Turning his gaze towards Pog, Cernunnos' expression shifts, his eyes carrying a weight of disappointment and reproach. 
                Pog shifted uncomfortably under Cernunnos's gaze, a hint of regret flashing across his features. "I know, Cernunnos," he muttered, his voice tinged with remorse. "But you know how it is. But I couldn't just ignore.."
            </p>

            <p>
                Cernunnos's expression softened slightly, understanding the sentiment behind Pog's words.
                "I see the burden you carry, the weight of your past mistakes," Cernunnos continues, his voice carrying a note of empathy. 
                "You chose to protect your family, and for that, I do not fault you. But in doing so, you unleashed a cascade of events that threaten the very fabric of our world."
            </p>

            <p>
                "That Demon God's curse has left you diminished, stripped of your former glory," Cernunnos observes, his eyes piercing through Pog's facade. 
                "Yet, even in your current state, there is potential for redemption. Seek out the remnants of your past, <span class="divine">Seiryu</span> ," Cernunnos intones, his gaze shifting from Pog to the player, "for in this journey, you will not walk alone."
                As Cernunnos calls Pog "<span class="divine">Seiryu</span>", the player is puzzled by the unfamiliar name. Sensing the player's curiosity, Cernunnos turns his gaze towards them, his eyes shimmering with ancient wisdom. "<span class="divine">Seiryu</span>," he says solemnly, "is a name of great significance. 
                It is the name that resonates with the essence of the celestial dragon, a guardian of the divine realm known as the Divine Draconian Peaks."
            </p>
            <p>
                As Cernunnos prepares to depart, his majestic form radiating with ancient power, he turns once again to Pog. 
                "<span class="divine">Seiryu</span>," he says with a voice that resonates like the rustling of leaves in the wind,  
                "it is time for you to reveal your true story to your companion. The path ahead is fraught with peril, and trust will be your greatest ally."
                They deserve to know the full extent of your journey, your trials, and your purpose."
            </p>
            <p>
                With a final nod, Cernunnos turned away, his form fading into the depths of the forest. 
            </p>

            <ul>
                <li><a href="../place/">Pog looks at you ready to reveal the truth.</a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"I don't want to hear a peep out of you when we're talking to Cernunnos. Just nod your head, say your piece, and let me do the talking."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>