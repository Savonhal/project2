<?php 

    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';

    $monster = [
        "name" => "Diamond Mantis",
        "hp" => 500,
        "maxHP" => 500,
        "atk" => 70,
        "def" => 80,
        "spd" => 65,
        "monExp" => 5000,
    ];
    //TODO Create battle sequence
    // Roll dice, loop or both?
    
    //Checks so see if player won the battle and then calls levelUp to check if player can level up
    //Also edit echo <p> under the if statement to give flavor text/aftermath of the battle
    $winBattle = true;
    function outcome(){
        global $winBattle;
        global $monster;
        if($winBattle){
            //echo the scenarion of battle and how the player defeated the monster.
            echo"<p>But then, in a moment of clarity, you spot a chink in the mantis's armor—a small, seemingly insignificant gap between its segments.</p>";
            echo"<p>With renewed determination, you press the attack, targeting the vulnerable spot with precision strikes.</p>";
            echo"<p>Finally, with one last, decisive strike, you deliver the finishing blow, driving your weapon deep into the mantis's exposed underbelly. With a deafening screech, the mantis collapses to the forest floor, its once-mighty form reduced to nothing more than a lifeless husk.</p>";
            echo"<p>\"I'll be damned... You actually did it! Heh, reckon old Stick-in-the-Mud's gonna have to cough up that favor now, ain't he? Wonder what we can get outta him...\"</p>";
            echo"<p>
                But before Pog can finish his sentence, a piercing howl reverberates through the Draconian woods, cutting through the tension like a knife.
                A hazy mist begins to envelop the battlefield, swirling and coalescing into a spectral form. From within the mist emerges a magnificent white wolf, its eyes gleaming with an otherworldly light as it strides purposefully towards you and Pog.
            </p>";
            echo"
            <div class='enemyStats tooltip'>
                <img class='enemyAnim2' src='../../images/encounters/lord_of_the_dracovian_woods_left.png' style='width:200px;length:100px'alt='wold picture'>
                    <div class='right'>
                        <h2>???</h2>
                        <h5>
                           ???
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ?????</p>
                        <p><img src='../../images/icons/katana.png'>Attack: ?????</p>
                        <p><img src='../../images/icons/shield.png'>Defense: ?????</p>
                        <p><img src='../../images/icons/sprint.png'>Speed: ??????</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                    </div>
                </div>
            ";
            levelUp($monster['monExp']);
            
            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../place/dragonRoute2_1.php'>The wolf approaches you and Pog. </a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                With each strike, the mantis's crystalline exoskeleton proves impervious to your attacks, deflecting blows with ease and leaving you vulnerable to its counterattacks. 
                Despite Pog's encouragement and your own determination, the odds seem stacked against you as the battle wears on.
                As the minutes tick by, exhaustion sets in, your movements growing sluggish and your strength waning with each passing moment. 
                The mantis, sensing your weakness, presses the advantage, driving you back with a relentless barrage of strikes that leave you battered and bruised.
                As the Diamond Mantis prepares to deliver the final blow, a haunting howl pierces the air, sending shivers down your spine. A hazy mist descends upon the battlefield, obscuring your vision as a figure emerges from its depths.
            </p>";
            echo"
            <div class='enemyStats tooltip'>
                <img class='enemyAnim2' src='../../images/encounters/lord_of_the_dracovian_woods_left.png' style='width:200px;length:100px'alt='wold picture'>
                    <div class='right'>
                        <h2>???</h2>
                        <h5>
                           ???
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ?????</p>
                        <p><img src='../../images/icons/katana.png'>Attack: ?????</p>
                        <p><img src='../../images/icons/shield.png'>Defense: ?????</p>
                        <p><img src='../../images/icons/sprint.png'>Speed: ??????</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                    </div>
                </div>
            ";
            echo"<p>
                From within the mist steps a magnificent white wolf, its fur shimmering like freshly fallen snow in the dappled sunlight. With an aura of power and authority, it confronts the mantis, its piercing gaze locking onto the creature with unwavering intensity.
                With a swift and decisive strike, the wolf pounces, its jaws closing around the mantis's neck with lethal precision. In a flash of movement, the mantis is vanquished, its once-mighty form reduced to nothing more than a lifeless husk.
                As the mist begins to dissipate, the wolf turns its attention towards you and Pog, its eyes betraying a mixture of curiosity and suspicion. With a low growl, it approaches, its gaze never leaving yours as it assesses your worth.
            </p>";
            levelUp($monster['monExp']);
            echo"
                <ul>
                <li><a href='../../index.php'>The wolf approaches you and Pog.</a></li>
                </ul>
            ";
        }
    }

    //Copy and paste this for other files in the battleOutcome directory
    //Feel free to change rand values, $minimumDamage, and echo text to make it unique for some monsters 
    function battle(){
        global $winBattle;
        global $monster;
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/bosses/diamondMantis.jpg' style='width:200px;length:100px'alt='mantis picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                        'Ruthless and Unrelenting, this apex predator normally stalks the dense and dark parts of the Draconian Woodlands in search for its favorite meal: Greater Insects.
                         However, it seems like this individual attacked the village directly.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
        ";
        echo"<h3> Battle Log: </h3>";
        $minimumDamage = 1;
        while(($monster['hp'] > 0) && ($_SESSION['player']['hp'] > 0)){
            $userRoll = rand(1,6) + $_SESSION['player']['spd'];
            $monsterRoll = rand(1,6) + $monster['spd'];
            
            if($userRoll >= $monsterRoll){
                //Player attacks monster first
                
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $monster['hp'] -= round($playerDMG);
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']."s have died!\n</p>";
                    break;
                }
                
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG);
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 50){
                    $winBattle = false;
                    echo "<p>A piercing howl reverberates thorughout the Draconian Woods!</p>";
                    echo "<p>A hazy misty descends upon the battlefield!</p>";
                    echo"
                    <div class='enemyStats tooltip'>
                        <img class='enemyAnim2' src='../../images/encounters/lord_of_the_dracovian_woods_left.png' style='width:200px;length:100px'alt='wold picture'>
                            <div class='right'>
                                <h2>???</h2>
                                <h5>
                                   ???
                                </h5>
                                <p><img src='../../images/icons/hearts.png'>HP: ?????</p>
                                <p><img src='../../images/icons/katana.png'>Attack: ?????</p>
                                <p><img src='../../images/icons/shield.png'>Defense: ?????</p>
                                <p><img src='../../images/icons/sprint.png'>Speed: ??????</p>
                                <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                            </div>
                        </div>
                    ";                    echo "<p>A stark white wolf appears and in a flash the mantis is decapitated! Mantis HP: 0/500</p>";
                    $monster['hp'] = 0;
                    break;
                }
              
                
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG);
                echo "<p>".$monster['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 50){
                    $winBattle = false;
                    echo "<p>A piercing howl reverberates thorughout the Draconian Woods!</p>";
                    echo "<p>A hazy misty descends upon the battlefield!</p>";
                    echo"
                    <div class='enemyStats tooltip'>
                        <img class='enemyAnim2' src='../../images/encounters/lord_of_the_dracovian_woods_left.png' style='width:200px;length:100px'alt='wold picture'>
                            <div class='right'>
                                <h2>???</h2>
                                <h5>
                                   ???
                                </h5>
                                <p><img src='../../images/icons/hearts.png'>HP: ?????</p>
                                <p><img src='../../images/icons/katana.png'>Attack: ?????</p>
                                <p><img src='../../images/icons/shield.png'>Defense: ?????</p>
                                <p><img src='../../images/icons/sprint.png'>Speed: ??????</p>
                                <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                            </div>
                        </div>
                    ";                    echo "<p>A stark white wolf appears and in a flash the mantis is decapitated! Mantis HP: 0/500</p>";
                    $monster['hp'] = 0;
                    break;
                }
               
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $monster['hp'] -= round($playerDMG);
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']." has died!\n</p>";
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
    <title>Encounter with Diamond Mantis</title>
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
            <?= battle(); ?>
        </div>
        <div class="textbox wood_village">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1 (BOSS))</h2>
            <h2>Showdown at Great Insect Village: Diamond Mantis</h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_battle/boss.mp3" type="audio/mpeg">
            </audio>
            <h4>
                "Indeed, while many of the Great insects of the Draconian Woodlands have undergone significant evolutionary changes over the millennia, the Diamond Mantis stands as a testament to the concept of "if it ain't broke, don't fix it." Unchanged and unyielding, this formidable predator has remained a lethal killing machine since time immemorial. 
                As the top predator in the region, the mantis's relentless predation has driven many of the Great insect species to evolve complex social behaviors and heightened intelligence as a means of survival.
                This has led to the development of intricate social hierarchies and communication systems among the insect communities, paving the way for the emergence of sapience in many of the Great Insect species of the Draconian Woodlands.  
            </h4>
            <p>
                The air crackles with tension as you leap into action, joining the fray against the fearsome Diamond Mantis. The mantis looms before you, its crystalline exoskeleton gleaming in the dappled sunlight filtering through the canopy above.
            </p>
            <p>
                With a swift motion, the mantis lunges forward, its razor-sharp claws poised to strike. You dodge to the side just in time, feeling the rush of air as the creature's jaws snap shut inches from your face. 
                But the mantis is relentless, its attacks coming fast and furious with no respite in sight. With each strike, you feel the sting of its crystalline armor, the impact reverberating through your bones as you struggle to keep your footing.
                As the battle rages on, frustration mounts within you, your every move thwarted by the mantis's impenetrable defenses. 
            </p>
            <p>
            Undeterred, you press the attack, driving the mantis back with a flurry of strikes. Each blow lands with the force of a sledgehammer, but still, the mantis refuses to yield. With a roar of defiance, it retaliates, unleashing a barrage of attacks that leave you staggering and gasping for breath.
            </p>
            <?= outcome()?>
            <ul>
                <li><a href="../encounters/diamondMantisOutcome.php">Continue to battle </a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Watch yourself around the Diamond Mantis, mate. One wrong move, and you'll end up as its next meal, mark my words."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>