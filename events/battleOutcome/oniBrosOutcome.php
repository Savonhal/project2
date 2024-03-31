<?php 
    //left side of dragonRoute1 outcome
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';
    
    $monster = [
        "name" => "Akuma",
        "hp" => 500+ round($_SESSION['player']['lvl']*2),
        "maxHP" => 500+ round($_SESSION['player']['lvl']*2),
        "atk" => 120 + round($_SESSION['player']['lvl']*2),
        "def" => 90 + round($_SESSION['player']['lvl']*2),
        "spd" => 100 + round($_SESSION['player']['lvl']*2),
        "monExp" => rand(1500,2500),
    ];

    $monster2=[
        "name" => "Yuki",
        "hp" => 450+ round($_SESSION['player']['lvl']*2),
        "maxHP" => 450+ round($_SESSION['player']['lvl']*2),
        "atk" => 90 + round($_SESSION['player']['lvl']*2),
        "def" => 100 + round($_SESSION['player']['lvl']*2),
        "spd" => 120+ round($_SESSION['player']['lvl']*2),
        "monExp" => rand(1500,2500),
    ];

    function encounter(){
        global $monster;
        global $monster2;  
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
    }

    //TODO Create battle sequence
    // Roll dice, loop or both?
    
    //Checks so see if player won the battle and then calls levelUp to check if player can level up
    //Also edit echo <p> under the if statement to give flavor text/aftermath of the battle
    $winBattle = true;
    function outcome(){
        global $winBattle;
        global $monster;
        global $monster2;
        if($winBattle){
            //echo the scenarion of battle and how the player defeated the monster.
            
            echo"<p>As the battle raged on, the Oni brothers pressed their advantage with brute force and dark sorcery. Akuma's mace club swung relentlessly, each blow threatening to shatter bone, while Yuki's crackling lightning sowed chaos among your group.</p>";
            echo"<p>You, keeping a watchful eye on the Oni brothers, noticed a momentary lapse in Akuma's defenses as he focused his attention on one of your companions. Seizing the opportunity, you swiftly closed the distance between you and Akuma, your blade flashing with deadly precision as you aimed a series of rapid strikes at his exposed flank.</p>";
            echo"<p>Aria, noticing an opportunity, unleashed a barrage of ethereal bolts of light, her magic striking true and momentarily driving back the Oni brothers. Elara, her healing magic flowing forth in a torrent of radiant energy, worked tirelessly to mend your group's wounds and bolster their resolve.</p>";
            echo"<p>As the battle reached its climax, you noticed a weakness in Akuma's defenses. With a quick nod to Aria, you devised a plan to exploit this vulnerability, coordinating your attacks with precision timing.</p>";
            echo"<p>With Aria's magic blazing brighter than ever, her ethereal bolts of light raining down upon the Oni brothers with relentless fury, you seized the moment to strike. Channeling all your strength and skill into a single devastating blow, you unleashed a powerful flurry of strikes against Akuma, catching him off guard and driving him to his knees.</p>";
            echo"<p>.Seeing his brother falter, Yuki hesitated for just a moment, his concentration wavering as doubt crept into his mind. Sensing an opportunity, Elara unleashed a surge of healing magic, revitalizing your group and imbuing them with renewed vigor.</p>";
            echo"<p>With one final, coordinated assault, you and your companions overwhelmed Yuki, driving him back with relentlessly without giving him time to cast his magic, until he, too, lay defeated at your feet.</p>";
            echo"<p>The Oni brothers, once fearsome adversaries, now lay defeated and broken, their reign of terror brought to an end by your groups unwavering determination and spirit.</p>";
            echo"<p>With the oni brothers vanquished, the barrier surrounding Old Havenwood slowly dissipates.</p>";
            echo"<p>The mist that had descended on the village grows hazier, which obscures your vision as a figure emerges from it's depth.</p>";
            levelUp($monster['monExp']);
            levelUp($monster2['monExp']);
            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../encounters/lordDeerEncounter.php'>As the figure approaches..</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo "<p>
                As the battle raged on, you found yourselves gradually overwhelmed by the relentless onslaught of the Oni brothers. 
                Despite your best efforts, you struggled to keep pace with their ferocious attacks, each blow landing with bone-crushing force and driving you back at every turn.
            </p>";
            echo "<p>
                With Aria's magic faltering under the relentless assault, you found yourselves increasingly vulnerable to the brothers' devastating blows. 
                Despite Elara's best efforts to heal your wounds, you could feel your strength waning with each passing moment, the odds of victory slipping further and further from your grasp.
            </p>";
            echo "<p>
                In a desperate bid to turn the tide of battle, you launched a bold counterattack against the brothers, but it proved to be in vain. 
                Akuma and Yuki fought with unmatched skill and ferocity, their blows raining down upon you with unrelenting force until you could no longer muster the strength to continue the fight.
            </p>";
            echo "<p>
                With a final, devastating blow, Akuma and Yuki struck you down, leaving you battered and broken upon the blood-stained earth. 
                As darkness closed in around you, you knew that this battle was lost, your valiant efforts unable to overcome the overwhelming might of the Oni brothers.
            </p>";
            echo "<p>You've died..</p>";
            echo"<img style='width:200px;length:100px' src='../../images/player/grave.png'>";
            saveCharacterStats('../../data.txt');
            echo"
                <ul>
                <li><a href='../../index.php'>Create a new Character?</a></li>
                </ul>
            ";
        }
    }

    //Copy and paste this for other files in the battleOutcome directory
    //Feel free to change rand values, $minimumDamage, and echo text to make it unique for some monsters 
    function battle(){
        global $winBattle;
        global $monster;
        global $monster2;
        echo"<h3> Battle Log: </h3>";
        $minimumDamage = 1;
        while((($monster['hp'] > 0) || ($monster2['hp'] > 0)) && ($_SESSION['player']['hp'] > 0)){
            $userRoll = rand(1,6) + $_SESSION['player']['spd'];
            $monsterRoll = rand(1,6) + $monster['spd'];
            
            if($userRoll >= $monsterRoll){
                //Player attacks monster first
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $playerDMG2 = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster2['def'])) ,0);
                $ariaDMG = round(($_SESSION['player']['atk'] + rand(3, 10)) * (100/(100+$monster2['def'])) ,0);
                
                
                if($monster['hp'] > 0){
                    $monster['hp'] -= round($playerDMG);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                    
                    $monster['hp'] -= round($ariaDMG);
                    echo "<p> Aria attacks ".$monster['name']." for ".$ariaDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                    
                    if($monster['hp'] <= 0){
                        echo "<p>You killed ".$monster['name']." !\n</p>";   
                    }
                }
                if($monster2['hp'] > 0){
                    $monster2['hp'] -= round($playerDMG2);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster2['name']." for ".$playerDMG2.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    
                    $monster2['hp'] -= round($ariaDMG);
                    echo "<p> Aria attacks ".$monster2['name']." for ".$ariaDMG.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    
                    if($monster2['hp'] <= 0){
                        echo "<p>You killed ".$monster2['name']." !\n</p>";   
                    }
                }
                if($monster['hp'] <= 0 && $monster2['hp'] <= 0){
                    $winBattle = true;
                    echo"<p>You won the battle!</p>";
                    break;
                }
               
                //monsters attacks second
                if($_SESSION['player']['hp'] > 0){
                    $monDMG2 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG2);
                    echo "<p>".$monster['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    echo"<p>Elara heals you for ".round($_SESSION['player']['maxHP']*.4)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.4);
                }
                if($_SESSION['player']['hp'] > 0){
                    $monDMG3 = round(($monster2['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG3);
                    echo "<p>".$monster2['name']." counters ".$_SESSION['player']['name']." for ".$monDMG3.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    echo"<p>Elara heals you for ".round($_SESSION['player']['maxHP']*.4)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.4);
                }
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..</p>";
                    break;
                }
                
               
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                if($_SESSION['player']['hp'] > 0){
                    $monDMG2 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG2);
                    echo "<p>".$monster['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    echo"<p>Elara heals you for ".round($_SESSION['player']['maxHP']*.4)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.4);
                }
                if($_SESSION['player']['hp'] > 0){
                    $monDMG3 = round(($monster2['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG3);
                    echo "<p>".$monster2['name']." counters ".$_SESSION['player']['name']." for ".$monDMG3.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    echo"<p>Elara heals you for ".round($_SESSION['player']['maxHP']*.4)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.4);
                }
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..</p>";
                    break;
                }

                //player attacks second
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $playerDMG2 = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster2['def'])) ,0);
                $ariaDMG = round(($_SESSION['player']['atk'] + rand(3, 10)) * (100/(100+$monster2['def'])) ,0);
                
                
                if($monster['hp'] > 0){
                    $monster['hp'] -= round($playerDMG);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                    
                    $monster['hp'] -= round($ariaDMG);
                    echo "<p> Aria attacks ".$monster['name']." for ".$ariaDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                    
                    if($monster['hp'] <= 0){
                        echo "<p>You killed ".$monster['name']." !\n</p>";   
                    }
                }
                if($monster2['hp'] > 0){
                    $monster2['hp'] -= round($playerDMG2);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster2['name']." for ".$playerDMG2.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    
                    $monster2['hp'] -= round($ariaDMG);
                    echo "<p> Aria attacks ".$monster2['name']." for ".$ariaDMG.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    
                    if($monster2['hp'] <= 0){
                        echo "<p>You killed ".$monster2['name']." !\n</p>";   
                    }
                }
                if($monster['hp'] <= 0 && $monster2['hp'] <= 0){
                    $winBattle = true;
                    echo"<p>You won the battle!</p>";
                    break;
                }
               
            }
        }
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
    <title>Battle with the Oni</title>
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
            <?= battle() ?>
        </div>
        <div class="textbox ghost_town">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 2 BOSS)</h2>
            <h2>BOSS BATTLE:</h2>
            <h2>Oni Brothers: <span class="boss">Infernal Frostbite, Akuma and Yuki</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_battle/norainutonoranekonokousou.mp3" type="audio/mpeg">
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
                As the tension thickened in the air, Akuma and Yuki exchanged a silent nod, their intentions clear. 
                The clash began with a deafening roar as Akuma charged forward, his massive mace club swinging in a deadly arc aimed at your group. 
                His red-skinned form seemed to radiate raw power as he closed the distance with startling speed.
            </p>
            <p>
                Yuki followed suit, his blue-skinned figure gliding gracefully across the forest floor, his demonic anaconda familiar crackling with dark energy. 
                With a flick of his wrist, bolts of black lightning lashed out, narrowly missing your group as they scrambled to evade the deadly magic.
            </p>
            <div style='display:flex'>
                        <img class='enemyAnim1' src='../../images/encounters/Aria.png' style='width:200px;length:100px'alt='aria picture'>
                        <img class='enemyAnim2' src='../../images/encounters/Elara.png' style='width:200px;length:100px'alt='elara picture'>
            </div>
            <p>
               Meanwhile, Aria and Elara unleashed their own arsenal of spells, their movements fluid and precise as they wove intricate patterns in the air. 
               Aria's magic manifested as ethereal bolts of light that streaked towards the Oni brothers, while Elara's healing magic provided vital support to your group, ensuring they remained standing against the onslaught.
            </p>
            <?= outcome() ?>

               
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Stay on your feet! We can't afford to let our guard down for a second!"</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>