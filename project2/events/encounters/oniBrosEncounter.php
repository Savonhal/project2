<?php 

    session_start();

    require '../showStats2.php';

    function encounter(){
        $monster = [
            "name" => "Akuma",
            "hp" => 500+ round($_SESSION['player']['lvl']*2),
            "maxHP" => 500+ round($_SESSION['player']['lvl']*2),
            "atk" => 120 + round($_SESSION['player']['lvl']*2),
            "def" => 100 + round($_SESSION['player']['lvl']*2),
            "spd" => 100 + round($_SESSION['player']['lvl']*2),
            "monExp" => rand(1500,2500),
        ];
    
        $monster2=[
            "name" => "Yuki",
            "hp" => 450+ round($_SESSION['player']['lvl']*2),
            "maxHP" => 450+ round($_SESSION['player']['lvl']*2),
            "atk" => 90 + round($_SESSION['player']['lvl']*2),
            "def" => 120 + round($_SESSION['player']['lvl']*2),
            "spd" => 120+ round($_SESSION['player']['lvl']*2),
            "monExp" => rand(1500,2500),
        ];
        echo"
            <div class='enemyStats tooltip'>
                <br>
                <img class='enemyAnim4' src='../../images/bosses/red_oni.jpg' style='width:200px;length:125px'alt='mantis picture'>
                    <div class='right' style='top: 140px; left: 100px; background-color: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))'>
                        <h2 class='boss'>".$monster['name']."</h2>
                        <h5>
                            'Hot-headed, ill-tempered, Akuma is the muscle and brawns of the duo.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                    </div>
            </div>
        
        ";
        echo"
            <div class='enemyStats tooltip'>
                <br>
                <img class='enemyAnim1' src='../../images/bosses/blue_oni.png' style='width:200px;length:125px'alt='mantis picture'>
                    <div class='right' style='top: 140px; left: 60px; background-color:  linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))'>
                        <h2 class='boss'>".$monster2['name']."</h2>
                        <h5>
                            'Unlike his brother, Yuki is much more calm, collected, and calculating. He utilizes magic which is a very rare skill among the Oni.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster2['hp']."/".$monster2["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster2['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster2['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster2['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster2['monExp']."</p>
                    </div>
            </div>
        
        ";
        echo'<h4 class="boss">Akuma, The Bane of Mountains </h4>';
        echo'<p>
            With his fiery red skin and muscular frame, Akuma cuts an imposing figure among his kin. 
            He is driven by an insatiable hunger for battle and revels in the chaos and destruction he leaves in his wake.
            Armed with a massive mace club imbued with dark magic, he crushes anyone who dares to oppose him with merciless force.
            Akuma once lifted a mountain peak with his sheer strength alone, hurling it at his enemies and crushing entire armies beneath its weight, a feat that earned him the respect of even the most fearsome Demon Gods.
        </p>';
        echo'<p>
            Despite his brute strength and ferocious demeanor, Akuma\'s impulsiveness often leads him into reckless situations. 
            He is quick to anger and slow to forgive, making him a volatile and unpredictable adversary on the battlefield.
        </p>';
        echo'<h4 class="boss">Yuki, The Icicle Sovereign </h4>';
        echo'<p>
            Yuki, in stark contrast to his hot-headed brother, possesses an icy demeanor and a keen intellect. With his icy blue skin and piercing gaze, he exudes an aura of a calculated menace. 
            From a young age, Yuki displayed an innate affinity for magic, a trait rare among Oni. His mastery over the dark arts quickly surpassed that of his peers, earning him both admiration and fear. 
            While Akuma reveled in the chaos of battle, Yuki honed his skills in the shadows, preferring to wield his powers with precision and finesse. 
            Instead of a staff or wand, He utilizes his demonic anaconda familiar as a conduit for his magic.
            Yuki once froze an entire city in a perpetual winter, encasing its inhabitants in ice and snow for centuries, a chilling display of his mastery over frost magic which has even garnered the attention of Demon Gods.
        </p>';
        echo'<p>
            While he lacks his brother\'s brute strength, his cunningness and resourceful nature makes him a formidable foe in his own right.
        </p>';
        echo '<p>
            "I\'ve heard stories about the Diamond Mantis, but seeing it in action... It\'s a whole different story. That thing\'s a force of nature." - Pog
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
    <title>Oni Brothers Encounter</title>
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
        <div class="textbox ghost_town">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 2 BOSS)</h2>
            <h2>BOSS INTRO:</h2>
            <h2>Oni Brothers: <span class="boss">Infernal Frostbite, Akuma and Yuki</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_encounter/darkmatter.mp3" type="audio/mpeg">
            </audio>
            <h4>
                "The Oni brothers, Akuma and Yuki, hail from the depths of Termina's underworld, where they once reigned as feared and ruthless warriors.
                 Born into a realm of darkness and chaos, they thrived amidst the tumultuous power struggles of demon lords and fiends.
                 From a young age, they were known for their insatiable thirst for dominance and their ruthless methods of achieving it. 
                 Together, they forged a fearsome reputation as the most formidable Oni duo in the underworld, leaving a trail of destruction in their wake earning the the duo the moniker "Infernal Frostbite".
                 Their lust for power led them to venture beyond the confines of the underworld, seeking to extend their influence to the surface world. 
                 With their demonic strength and dark magic, they sought to conquer the Draconian woodlands and bend its inhabitants to their will."
            </h4>
            <p>
                As the Imp approached the cavern where Akuma and Yuki resided, he trembled with fear at the thought of delivering the news. The brothers were notorious for their ruthless nature, and any bearer of bad tidings risked facing their wrath.
            </p>

            <p>
                "Imp, you return. What news do you bring?" Yuki inquired, his voice smooth and chilling.
            </p>

            <p>
                The Imp stammered, "My lords, outsiders have entered from beyond the barrier. They've defeated the others and are now roaming freely. 
                They were a strange bunch, boss. One of them was a pot, I swear! But they fought like demons themselves!"
            </p>
                Akuma, the hot-headed brother with crimson skin, grips his mace club tightly, his eyes burning with excitement.
                "Outsiders, you say? Strong ones at that? Hah! Finally, some worthy prey! We'll crush them beneath our might and feast on their souls!"
            <p>
                Yuki raised a calming hand. 
                "Patience, Akuma. There's more to this than meets the eye. Outsiders breaching the barrier is a rare occurrence. There may be more to gain by observing. 
                If they come from beyond the barrier, they could be our ticket to freedom."
                Yuki, the cooler-headed brother with azure skin, strokes his demonic anaconda familiar thoughtfully, his gaze sharp and calculating.

            </p>
            <p>
                Akuma grumbled but conceded to Yuki's logic. "Very well. Imp, lead us to these outsiders. We shall assess their worth and determine our next move."
                The Imp nodded, relieved to have escaped the brothers' fury, and scurried ahead to guide Akuma and Yuki to their key to freedom.
            </p>
            
            <ul>
                <li><a href="../encounters/oniBrosEncounter2.php">Returning back to your group of companions... </a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Well, looks like our luck just ran out. It not just any two brothers but the Infernal Frostbite duo. Brace yourself, partner. We're in for a rough ride."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>