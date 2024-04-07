<?php 

    session_start();

    require '../showStats2.php';

    function encounter(){
        $monster = [
            "name" => "Illuyanka",
            "hp" => 1500+ round($_SESSION['player']['lvl']*2),
            "maxHP" => 1500+ round($_SESSION['player']['lvl']*2),
            "atk" => 190 + round($_SESSION['player']['lvl']*2),
            "def" => 150 + round($_SESSION['player']['lvl']*2),
            "spd" => 175 + round($_SESSION['player']['lvl']*2),
            "monExp" => rand(3000,4000),
        ];
    
        echo"
            <div class='enemyStats tooltip'>
                <br>
                <img class='enemyAnim1' src='../../images/bosses/false_celestial_dragon.jpg' style='width:200px;length:125px'alt='mantis picture'>
                    <div class='right' style='top: 120px;  background-color: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))'>
                        <h2 class='boss'>".$monster['name']."</h2>
                        <h5>
                            'The dragon who had stolen Seiryu's orb and claimed its powers for himself. But it seems as though his control and new form is still rather unstable.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                    </div>
            </div>
        
        ";
        
        echo'<h4 class="boss">Illuyanka, The False Celestial  </h4>';
        echo'<p>
            Prior to his ascension to divinity, Illuyanka was a dragon who was known for his sadistic nature and ferocity among the mortal dragons of the Divine Draconian Peaks.
            It goes without saying that Illuyanka sided with the insurgents and aided in the downfall of Bahamut. After receiving word that Seiryu had returned to the surface world of Termina,
            Illuyanka was fortunate enough to discover his orb first and as such was promised to be its new successor. With the aid of a benefactor from the underworld, Illuyanka  was able
            access the powers of the orb and claimed it for himself. However, such a process seems to have taken an unexpected toll on his body and state of being.
        </p>';
       
        echo '<p>
            "This fool." - Pog
        </p>';
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
    <title>Illuyanka Encounter</title>
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
        <div class="textbox peaks1">
            <h2>On the Divine Draconian Peaks (BOSS)</h2>
            <h2>BOSS ENCOUNTER:</h2>
            <h2><span class="boss">The False Celestial, Illuyanka</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_encounter/bossnekonoteshita.mp3" type="audio/mpeg">
            </audio>
            <h4>
             
            </h4>
            <p>
                As the sinister presence coalesces into a tangible form, the air around you grows thick with an ominous energy, sending a chill down your spine. 
                With a sense of dread, you and Seiryu brace yourselves for the impending confrontation.
            </p>

            <p>
                Emerging from the swirling shadows, a figure looms before you, its form twisted and distorted by dark magic. 
                What you can assume to be Seiryu's orb, now pulsating with a malevolent glow, rests in its grasp, casting an eerie light across the desolate landscape.
            </p>
            <p>
                The figure reveals itself to be none other than the Dragon thief who stole the orb, his once-mortal form now transformed into that of a Celestial Dragon. 
                His serpentine body coils with an unnatural grace, his scales shimmering with a sickly hue of purple and grey, illuminated by the fiery glow of his crimson eyes.
            </p>
            <p>
                With a voice dripping with malice, the Dragon thief addresses Seiryu, mocking him for his naivety and daring to challenge his newfound power.
                "I am Illuyanka," he declares, his voice laced with malice, "It seems your precious orb has found its rightful owner at last. 
                You should thank me for liberating it from your feeble grasp."
            </p>
            <p>
                Seiryu's jaw clenches as he meets Illuyanka's gaze, his expression a mask of determination. "Illuyanka," he responds evenly, his voice tinged with a hint of disdain.
                "You may have the orb now, but its power is not yours to wield," he retorts, his voice ringing with defiance. "You've stolen that which you cannot control."
            </p>
            <p>
                Illuyanka's laughter echoes through the mountains, a chilling sound that reverberates in the stillness of the air. "Control?" he sneers, his gaze flickering with contempt. 
                "With the aid of my benefactor, Azazel, I have transcended mortal limitations and ascended to new heights of power."
            </p>
            <p>
                Seiryu's expression darkens at the mention of Azazel, a flicker of recognition crossing his features. 
                "Azazel... so he's behind this," he mutters, his voice tinged with bitterness. 
                "But mark my words, Illuyanka, your grasp on this power is tenuous at best. 
                You may think yourself invincible, but you are merely a pawn in Azazel's game."
            </p>
            <p>
                Illuyanka's eyes narrow at Seiryu's words, a flicker of uncertainty crossing his features. "Do not presume to lecture me, Seiryu," he hisses, his tone dripping with contempt. "I am master of my own destiny now, and nothing will stand in my way."
            </p>
            <p>
                With a defiant glare, Seiryu turns to you, his gaze unwavering. 
                "Do not be deceived by Illuyanka's bravado," he murmurs, his voice tinged with urgency. 
                "he is still a greenhorn who unnaturally claimed that power for himself. His current state is unstable, and we can exploit that weakness."
            </p>
            <p>
                As the storm rages overhead, you prepare to face Illuyanka and reclaim the orb, no matter the cost.
            </p>
            <ul>
                <li><a href="../battleOutcome/falseCelestialOutcome.php">Battle the False Celestial Dragon</a></li>
            </ul>

              
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"Celestial Dragon Seiryu, Guardian of the Divine Draconian Peaks. 
                        He serves his lord, the Dragon God Bahamut, and protects the realm of the Divine Draconian Peaks alongside its other guardians.
                        After returning from the Divine Convention and parting ways with his lord, a rebellion sparked and forces Seiryu to make an ultimatum.
                        He shoulders the weight of his decision to this very day."
                    </h5>
                    <p>"His current form right now should be unstable but we should still be on out guard."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>