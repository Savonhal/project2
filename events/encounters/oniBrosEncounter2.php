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
            <h2>BOSS ENCOUNTER:</h2>
            <h2>Oni Brothers: <span class="boss">Infernal Frostbite, Akuma and Yuki</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/gameover.mp3" type="audio/mpeg">
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
                Since the morning of your day, you and your group of companions continue to explore Old Havenwood as a mist descends upon the old settlement.
                The mist swirled ominously around the decrepit ruins of Old Havenwood as two ominous imposing figures emerged from its depths. 
            </p>
            <p>
                
                Your group tensed, readying themselves for the inevitable confrontation with the Oni brothers. 
                As they drew nearer, you could make out the distinct features of the demonic duo, Akuma and Yuki, led by the imp who had previously escaped from the last battle. 
                Pog, eyeing the brothers warily, muttered to himself, "This doesn't bode well..."
            </p>
            <p>
                Akuma, with his fiery red skin and mace club, stepped forward first, a wicked grin twisting his features. 
                "Well, well, what do we have here?" he sneered, his voice a rumbling growl that seemed to echo through the eerie silence of the abandoned settlement.
            </p>
            <p>
                Yuki, his blue-skinned counterpart, his eyes glinting with a calculated intensity, observed your group with a sharp eye. He pets his demonic anaconda familiar, a subtle aura of arcane power emanating from his form.
                "Interesting. They seem stronger than the fools who dared to challenge us before."
            </p>
            <p>
                The imp, his voice dripping with malice, sneered, "You're all fools to stand against Akuma and Yuki. You'll meet your end soon enough."
                But before anyone could react, Yuki swiftly froze the imp with a single motion and shattered him, silencing him forever.
                The shock rippled through your group, realizing the ruthlessness of the brothers and the danger they posed.
            </p>
            <p>
                "Enough," Yuki declared coldly, his voice cutting through the tension like a blade. "He served his purpose," 
                Yuki explained, his voice devoid of remorse. "The imp led us to our key to freedom, and he was starting to annoy me. He was of no use anymore."
                Yuki's gaze shifted from the fallen imp to Aria and Elara, his tone tinged with a sense of recognition. "You two are important to the Lord of the Woods," he stated, his eyes narrowing as he assessed them. 
                "If you're here with these outsiders, then they must be significant as well. They wouldn't send random nobodies into the barrier with the emissary of the Lord of the Woods." 
                His words carried a weight of calculation, as if he were piecing together a puzzle with each passing moment.
            </p>
            <p>
                Akuma's eyes gleamed with anticipation as he stepped forward, his mace club gripped tightly in his hand. "Indeed," he agreed, his voice low and dangerous. "Killing them or holding them hostage might just be our ticket to freedom. After all, if they are important to the Lord of the Woods, he won't risk their lives lightly." His lips curled into a wicked grin, revealing rows of sharp teeth. 
                "And if these outsiders are important enough to warrant their protection, then they must possess something of value to us."
            </p>
            <p>
                Aria, the fairy, bristled at the sight of the Oni brothers and their remarks. "We won't let you harm anyone else. Your reign of terror ends here!" she declared defiantly, her voice ringing out clear and unwavering despite the tension in the air.
                Elara, her expression solemn, added, "You bring only suffering and destruction. It's time to put an end to it."
            </p>

            <ul>
                <li><a href="../battleOutcome/oniBrosOutcome.php">You and Pog both nod at each other as you both prepare for combat. </a></li>
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