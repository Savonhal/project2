<?php 
    session_start();

    require '../showStats2.php';

    function encounter(){   
        $monster = [
            "name" => "Imp",
            "hp" => 10,
            "maxHP" => 10,
            "atk" => 9,
            "def" => 7,
            "spd" => 150,
            "monExp" => 50,
        ];    
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim1'src='../../images/enemy/imp.png' style='width:100px;length:100px;position:relative; top:-30px'alt='imp picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'A small pathetic demon that is native to Termina's underworld. The only thing that is remarkable about them is their speed. They are often enlisted by stronger beings to act as scouts.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
        ";
        $monster2 = [
            "name" => "Lesser Demon",
            "hp" => 100+ round($_SESSION['player']['atk']*.3),
            "maxHP" => 100+ round($_SESSION['player']['atk']*.3),
            "atk" => 70+ round($_SESSION['player']['atk']*.3),
            "def" => 50+ round($_SESSION['player']['atk']*.3),
            "spd" => 70,
            "monExp" => 150,
        ];   
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim2'src='../../images/enemy/lesser_demon.png' style='width:150px;length:100px; position:relative;bottom:-170px;left:-150px;z-index:1;'alt='demon picture'>
                <div class='bottom' style='position:absolute;top:-50px;'>
                    <h2>".$monster2['name']."</h2>
                    <h5>
                    'The second most common type of demon in the underworld. These demons often come a variety of forms but they are characterized by more animal like features and lack of speech.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster2['hp']."/".$monster2["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster2['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster2['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster2['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster2['monExp']."</p>
                </div>
            </div>
        <img class='enemyAnim2'src='../../images/enemy/lesser_demon.png' style='width:150px;length:100px;position:relative;left:20px;bottom:-180px;z-index:0'alt='demon picture'>
        ";
        $monster3 = [
            "name" => "Ushi-Oni",
            "hp" => 200+ round($_SESSION['player']['atk']*.3),
            "maxHP" => 200+ round($_SESSION['player']['atk']*.3),
            "atk" => 90 + round($_SESSION['player']['atk']*.3),
            "def" => 80 + round($_SESSION['player']['atk']*.3),
            "spd" => 10,
            "monExp" => 200 ,
        ];    
        echo"
        <div class='enemyStats tooltip' style='position:relative; bottom:80px;left:70px;z-index:0;margin-bottom:-10px;'>
                <img class='enemyAnim4'src='../../images/enemy/ushioni.png' style='width:250px;length:100px;filter:brightness(50%)'alt=ushi-oni picture'>
                <div class='bottom' style='position:absolute;top:-50px;'>
                    <h2>".$monster3['name']."</h2>
                    <h5>
                    'A large demon with a face of a cow and the body of spider. Despite its appearance, this demon is actually amphibious and hunts near bodies of water. '
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster3['hp']."/".$monster3["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster3['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster3['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster3['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster3['monExp']."</p>
                </div>
            </div>
        
        ";
        echo"<div style='position:relative; top: -100px;'>
            <h4>Imps: </h4>
            <p>Amidst the fiery depths of the underworld, the Imp flits like a malevolent shadow, its mischievous grin belying its sinister nature.  Though diminutive in stature, its cunning surpasses that of many larger fiends, weaving intricate schemes and plots to sow discord and chaos wherever it treads. It often serves and follows more powerful demons.</p>
            <h4>Lesser Demons: </h4>
            <p>In the infernal hierarchy, Lesser Demons occupy a middle ground between imps and more powerful demon lords. Sporting goat-like heads atop sinewy bodies adorned with four muscular arms, they wield crude weapons with surprising dexterity. Often underestimated due to their size, these demons possess an insatiable hunger for souls, driving them to serve higher-ranking demons like the Oni brothers in exchange for the promise of greater power.</p>
            <h4>Ushi-Oni: </h4>
            <p>Among the twisted creatures that roam the infernal realm, the Ushi-Oni stands as a monstrous aberration. A grotesque fusion of spider and cow, its bloated body is adorned with coarse fur and bristling legs, while its grotesque head boasts rows of razor-sharp teeth and bulging, soulless eyes.Feeding on the souls of the damned, it serves as a fearsome guardian for more powerful demons, its venomous bite capable of inflicting agony beyond imagining.</p>
        </div>";
       
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
    <title>Demons Encounter</title>
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
            <?= encounter() ?>        
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
                <source src='../../music/norowaretayakata.mp3'>
            </audio>
            
            <p> 
                As you and Pog explore Old Havenwood in search of the Oni brothers, you find yourselves confronted by a motley crew of demons, led by an imp whose incessant chatter grates on the nerves of even his own comrades. 
                It seems like the commotion created by Merged Hell has attracted some attention. 
            </p>
            <p>
                "Well, well, well, what have we here?" the imp cackles, eyes gleaming with malicious intent. "Looks like we stumbled upon quite the spectacle, eh boys? A couple of meddling mortals poking their noses where they don't belong."
            </p>
            <p>
                Beside him, the two lesser demons exchange uneasy glances, clearly unimpressed by their leader's antics. The ushi oni, towering over the rest of the group, remains silent but nods in agreement, its massive form radiating menace.
            </p>
            <p>
                Pog rolls his eyes, a smirk playing at the corners of his lips. "Oh joy, it's the welcoming committee," he mutters under his breath, loud enough for you to hear. "What do you want, you little pest?" he addresses the imp, his tone laced with thinly-veiled annoyance.
            </p>
            <p>
                The imp bristles at Pog's remark, his tiny wings fluttering indignantly. "Watch your tongue, pot-head," he snaps, his voice grating on your ears like nails on a chalkboard. 
                The imp's eyes narrow, his grin faltering for a moment before he regains his composure. "Ha! You think you can intimidate us, little pot? Think again. The Oni brothers will hear of your insolence, mark my words.
                You may have taken down those weak specters, but you're no match for the might of the Oni brothers and their loyal servants."
            </p>
            <p>
                Pog arches an eyebrow at the imp's bold words, a smirk playing at the corners of his lips. 
                "Oh, look who's puffing out his chest," he remarks, his voice dripping with sarcasm. 
                "Last time I checked, it's not the ones sealed away in a forgotten corner of the woods who get to act all high and mighty. 
                You might want to rein in that arrogance of yours before it gets you into trouble, little imp."
            </p>
            <p>
                The imp's face flushes with indignation at Pog's biting retort."You'll regret those words, you insolent fool," he snarls, his voice trembling with barely-contained rage. 
                With a flick of his wrist, the imp signals to his companions, and the group advances menacingly.  
            </p>
            
            <a href='../battleOutcome/demonGroupOutcome.php'><p>You prepare yourself for battle with the group of demons.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Looks like these bums are the underlings of those Oni that we're after. If we play our cards right, we can lure out them out."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>